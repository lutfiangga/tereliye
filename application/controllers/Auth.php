<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    private $view = "backend/";
    private $redirect = "user";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        // Load model
        $this->load->model('M_auth');
        $this->load->model('M_user');
    }

    public function index()
    {
        $this->session->sess_destroy();
        $data = array(
            'judul' => "Login",
            'login' => ''
        );
        $this->template->load('backend/templateAuth', $this->view . 'Login', $data);
    }

    public function login()
    {
        $user = $this->input->post('username');
        $pwd = md5($this->input->post('password'));
        $data = $this->M_auth->CekLogin('user', 'username', $user);

        // Jika login berhasil
        if ($data && $data['password'] == $pwd && $data['username'] == $user) {
            if ($data['level'] == 'admin') { // admin
                $array = array(
                    'id_user' => $data['id_user'],
                    'username' => $data['username'],
                    'level' => 'admin',
                    'IsAdmin' => 1
                );
                $this->session->set_userdata($array);
                redirect('Admin_home', 'refresh');
            } else if ($data['level'] == 'member') { // member
                $array = array(
                    'id_user' => $data['id_user'],
                    'username' => $data['username'],
                    'level' => 'member',
                    'IsAdmin' => 1
                );
                $this->session->set_userdata($array);
                redirect('User_home', 'refresh');
            }
        } else { // Jika login gagal
            $this->session->set_flashdata('login_error', 'Username atau password salah!');
            redirect('Auth', 'refresh');
        }
    }

    public function register()
    {
        //untuk create tidak memangil model, langsung ke view dengan data baru
        $data = array(
            'judul' => "Buat Akun",
            'create' => ''
        );
        $this->template->load('backend/templateAuth', $this->view . 'Register', $data);
    }
    public function save()
    {

        // Validasi unik pada username
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, kembali ke halaman registrasi dengan error
            $data = array(
                'judul' => "Buat Akun",
                'create' => '',
                'register_error' => validation_errors() // Menyimpan pesan error validasi
            );
            $this->template->load('backend/templateAuth', $this->view . 'Register', $data);
        } else {
            // Validasi berhasil, simpan data pengguna baru
            // mendapatkan id_user terakhir
            $last_id = $this->M_user->getLastId();

            // jika tidak ditemukan, id_user diisi 1
            if ($last_id == null) {
                $id_user = 1;
            } else {
                // jika ditemukan, tambahkan 1 pada id_user terakhir
                $id_user = $last_id + 1;
            }

            $data = array(
                'id_user' => $id_user,
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'level' => 'member'
            );
            $this->M_user->save($data);
            // echo "<script>alert('Pendaftaran berhasil!');</script>";
            redirect($this->redirect, 'refresh');
        }
    }
    public function logout()
    {
        // Hancurkan data session
        $this->session->sess_destroy();
        redirect('Auth', 'refresh');
    }
}
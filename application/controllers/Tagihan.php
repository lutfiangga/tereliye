<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Tagihan extends CI_Controller
{
    private $view = "backend/v_tagihan/";
    private $redirect = "Tagihan";
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //Load model
        $this->load->model('M_tagihan');
        $this->load->model('M_wp');
        $this->load->model('M_kendaraan');
        $this->load->model('M_user');
        IsAdmin();
    }
    function index()
    {
        //memanggil model M_tagihan dengan function GetAll
        $read = $this->M_tagihan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Wajib Master",
            'sub' => "Data Tagihan Pengguna Wajib Pajak",
            'read' => $read
        );
        /*
        dengan $this->view artinya memanggil private $view="backend/v_user/"
        dilanjutkan dengan 'read' untuk memanggil read.php
        */
        $this->template->load('templateAdmin/Tagihan', $this->view . 'read', $data);
    }
    public function create()
    {
        $data = array(
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Data Master",
            'sub' => "Tambah Tagihan Pengguna Wajib Pajak",
            'wajib_pajak' => $this->M_wp->GetAll(),
            'getuser' => $this->M_user->GetUser(),
            'getkendaraan' => $this->M_kendaraan->GetAll(),
            'create' => ''
        );
        $this->template->load('templateAdmin/tagihan', $this->view . 'create', $data);
        // $this->load->view($this->view . 'create', $data);
    }
    public function save()
    {
        $this->form_validation->set_rules('id_kwitansi', 'Kode Kwitansi', 'required|is_unique[kwitansi.id_kwitansi]');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, kembali ke halaman registrasi dengan error
            $data = array(
                'username' => $this->session->userdata('username'),
                'level' => $this->session->userdata('level'),
                'judul' => "Data Master",
                'sub' => "Tambah Tagihan Pengguna Wajib Pajak",
                'wajib_pajak' => $this->M_wp->GetAll(),
                'getuser' => $this->M_user->GetUser(),
                'getkendaraan' => $this->M_kendaraan->GetAll(),
                'create' => '',
                'kode_error' => form_error('id_kwitansi'),
                // Menggunakan form_error() untuk mendapatkan pesan kesalahan Kode User
            );
            $this->template->load('templateAdmin/tagihan', $this->view . 'create', $data);
        } else {
            // Validasi berhasil, simpan data pengguna baru
            $data = array(
                'id_kwitansi' => $this->input->post('id_kwitansi'),
                'id_user' => $this->input->post('id_user'),
                'id_kendaraan' => $this->input->post('id_kendaraan'),
                'id_wp' => $this->input->post('id_wp'),
                'ket_uraian' => $this->input->post('ket_uraian'),
                'kd_va' => $this->input->post('kd_va'),
                'nominal' => $this->input->post('nominal'),
                'status' => 'Belum bayar',
                'tgl_bayar' => '0000-00-00'
            );
            $this->M_tagihan->save($data);

            redirect($this->redirect, 'refresh');
        }
    }
    public function edit()
    {
        $kd = $this->uri->segment(3);
        // echo $kd;
        $data = array(
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Data Master",
            'sub' => "Ubah Tagihan Pengguna Wajib Pajak",
            'kendaraan' => $this->M_kendaraan->GetAll(),
            'user' => $this->M_user->GetAll(),
            'wajib_pajak' => $this->M_wp->GetAll(),
            'edit' => $this->M_tagihan->edit($kd)
        );
        // $this->load->view($this->view . 'edit', $data);
        $this->template->load('templateAdmin/tagihan', $this->view . 'edit', $data);
    }
    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'id_kendaraan' => $this->input->post('id_kendaraan'),
            'id_wp' => $this->input->post('id_wp'),
            'ket_uraian' => $this->input->post('ket_uraian'),
            'kd_va' => $this->input->post('kd_va'),
            'nominal' => $this->input->post('nominal'),
            'status' => $this->input->post('status'),
            'tgl_bayar' => $this->input->post('tgl_bayar'),

        );
        $this->M_tagihan->update($kd, $data);
        redirect($this->redirect, 'refresh');
    }
    public function status()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'status' => $this->uri->segment(4)
        );
        $this->M_tagihan->update($kd, $data);
        redirect($this->redirect, 'refresh');
    }
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'id_kwitansi' => $kd
        );
        $this->M_tagihan->delete($data);
        redirect($this->redirect, 'refresh');


    }
    public function print()
    {
        $data['print'] = $this->M_tagihan->GetAll();
        $read = $this->M_tagihan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Data Tagihan Pengguna Wajib Pajak",
            'read' => $read
        );
        $this->load->view($this->view . 'print', $data);
    }
    public function excel()
    {
        $data['print'] = $this->M_tagihan->GetAll();
        $read = $this->M_tagihan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Data Tagihan Pengguna Wajib Pajak",
            'read' => $read
        );
        $this->load->view($this->view . 'excel', $data);
    }
}
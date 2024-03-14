<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Userwp extends CI_Controller
{
    /*
    $view berfungsi untuk membaca file view seperti read.php, create.php
    dan edit.php dengan lokasi folder views/backend/v_userwp/
    */
    private $view = "backend/v_userwp/";
    //memanggil control userwp/index dalam keadaan refresh
    private $redirect = "userwp";
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //control userwp menghubungkan model M_userwp
        IsAdmin();
        $this->load->model('M_userwp');
        $this->load->model('M_kendaraan');
    }
    function index()
    {
        $id_user = $this->session->userdata('id_user');

        // Memanggil model M_userwp dengan function GetByUserId
        $read = $this->M_userwp->GetByUserId($id_user);
        //memanggil model M_userwp dengan function GetAll
        $read = $this->M_userwp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Wajib Pajak",
            'sub' => "Data Wajib Pajak",
            'read' => $read
        );
        /*
        dengan $this->view artinya memanggil private $view="backend/v_user/"
        dilanjutkan dengan 'read' untuk memanggil read.php
        */
        $this->template->load('templateUser/Wajib_pajak', $this->view . 'read', $data);
    }
    public function create()
    {
        //untuk create tidak memangil model, langsung ke view dengan data baru
        $data = array(
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Wajib Pajak",
            'sub' => "Data Wajib Pajak",
            'kendaraan' => $this->M_kendaraan->GetAll(),
            'create' => ''
        );
        $this->template->load('templateUser/Wajib_pajak', $this->view . 'create', $data);
    }
    public function save()
    {
        $this->form_validation->set_rules('id_wp', 'NPWP', 'required|is_unique[wajib_pajak.id_wp]');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, kembali ke halaman registrasi dengan error
            $data = array(
                'username' => $this->session->userdata('username'),
                'level' => $this->session->userdata('level'),
                'judul' => "Wajib Pajak",
                'sub' => "Data Wajib Pajak",
                'kendaraan' => $this->M_kendaraan->GetAll(),
                'create' => '',
                'kode_error' => form_error('id_wp'),
                // Menggunakan form_error() untuk mendapatkan pesan kesalahan Kode User
            );
            $this->template->load('templateUser/Wajib_pajak', $this->view . 'create', $data);
        } else {
            // Validasi berhasil, simpan data pengguna baru
            $data = array(
                'id_wp' => $this->input->post('id_wp'),
                'no_ktp' => $this->input->post('no_ktp'),
                'id_kendaraan' => $this->input->post('id_kendaraan'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'id_user' => $this->session->userdata('id_user')
            );
            $this->M_userwp->save($data);

            redirect($this->redirect, 'refresh');
        }
    }

    public function edit()
    {
        /*
        segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
        data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
        */
        $kd = $this->uri->segment(3);
        $data = array(
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Wajib Pajak",
            'sub' => "Data Wajib Pajak",
            'kendaraan' => $this->M_kendaraan->GetAll(),
            //'edit' variabel yang akan dipanggil pada view edit.php
            'edit' => $this->M_userwp->edit($kd)
        );
        $this->template->load('templateUser/Wajib_pajak', $this->view . 'edit', $data);
    }
    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            /*
            'nama_userwp' =nama yang diambil dari fild pada tabel
            $this->input->post('nama_userwp') =nama yang diambil dari form
            */
            'no_ktp' => $this->input->post('no_ktp'),
            'id_kendaraan' => $this->input->post('id_kendaraan'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'id_user' => $this->session->userdata('id_user')
        );
        $this->M_userwp->update($kd, $data);
        redirect($this->redirect, 'refresh');
    }
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            //data akan dihapus sesuai uri->segment(3) yang dipilih
            'id_wp' => $kd
        );
        $this->M_userwp->delete($data);
        redirect($this->redirect, 'refresh');
    }
    public function print()
    {
        $data['print'] = $this->M_userwp->GetAll();
        $read = $this->M_userwp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Data Pengguna Wajib Pajak",
            'read' => $read
        );
        $this->load->view($this->view . 'print', $data);
    }
    public function excel()
    {
        $data['print'] = $this->M_userwp->GetAll();
        $read = $this->M_userwp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Data Pengguna Wajib Pajak",
            'read' => $read
        );
        $this->load->view($this->view . 'excel', $data);
    }
}
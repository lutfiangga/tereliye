<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Faktur extends CI_Controller
{
    private $view = "backend/v_faktur/";
    private $redirect = "Faktur";
    public function __construct()
    {
        parent::__construct();
        //Load model
        $this->load->model('M_tagihan');
        $this->load->model('M_wp');
        $this->load->model('M_kendaraan');
        $this->load->model('M_user');
        IsAdmin();
    }
    function index()
    {
        $id_user = $this->session->userdata('id_user');

        // Memanggil model M_kendaraan dengan function GetByUserId
        $read = $this->M_kendaraan->GetByUserId($id_user);
        //memanggil model M_tagihan dengan function GetAll
        $read = $this->M_tagihan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Wajib Master",
            'sub' => "Tagihan Saya",
            'read' => $read
        );
        /*
        dengan $this->view artinya memanggil private $view="backend/v_user/"
        dilanjutkan dengan 'read' untuk memanggil read.php
        */
        $this->template->load('templateUser/Faktur', $this->view . 'read', $data);
    }
    public function bayar($kd)
    {
        $data = array(
            'status' => 'lunas',
            'tgl_bayar' => date('Y-m-d') // Mengambil tanggal hari ini
        );

        $this->M_tagihan->bayar($kd, $data);

        redirect('faktur');
    }

    public function lihat()
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
            'lihat' => $this->M_tagihan->lihat($kd)
        );
        // $this->load->view($this->view . 'lihat', $data);
        $this->template->load('templateUser/faktur', $this->view . 'lihat', $data);
    }

    public function print()
    {
        $read = $this->M_tagihan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Tagihan Saya",
            'print' => $this->M_tagihan->GetAll(),
            'read' => $read
        );
        $this->load->view($this->view . 'print', $data);
    }
    public function excel()
    {
        $read = $this->M_tagihan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Tagihan Saya",
            'excel' => $this->M_tagihan->GetAll(),
            'read' => $read
        );
        $this->load->view($this->view . 'excel', $data);
    }

}
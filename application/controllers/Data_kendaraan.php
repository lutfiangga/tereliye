<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_kendaraan extends CI_Controller
{
    /*
    $view berfungsi untuk membaca file view seperti read.php, create.php
    dan edit.php dengan lokasi folder views/backend/v_kendaraan/
    */
    private $view = "backend/v_datakendaraan/";
    //memanggil control kendaraan/index dalam keadaan refresh
    private $redirect = "data_kendaraan";
    public function __construct()
    {
        parent::__construct();
        //control kendaraan menghubungkan model M_kendaraan
        IsAdmin();
        $this->load->model('M_kendaraan');
        $this->load->model('M_wp');
    }
    function index()
    {
        //memanggil model M_kendaraan dengan function GetAll
        $read = $this->M_wp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Data Master",
            'sub' => "Data Kendaraan",
            'read' => $read
        );
        /*
        dengan $this->view artinya memanggil private $view="backend/v_user/"
        dilanjutkan dengan 'read' untuk memanggil read.php
        */
        $this->template->load('templateAdmin/kendaraan', $this->view . 'read', $data);
    }
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            //data akan dihapus sesuai uri->segment(3) yang dipilih
            'id_kendaraan' => $kd
        );
        $this->M_kendaraan->delete($data);
        redirect($this->redirect, 'refresh');
    }
    public function print()
    {
        $data['print'] = $this->M_wp->GetAll();
        $read = $this->M_wp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Data Kendaraan Pengguna",
            'read' => $read
        );
        $this->load->view($this->view . 'print', $data);
    }
    public function excel()
    {
        $data['print'] = $this->M_wp->GetAll();
        $read = $this->M_wp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Data Kendaraan Pengguna",
            'read' => $read
        );
        $this->load->view($this->view . 'excel', $data);
    }
}
<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Wajib_pajak extends CI_Controller
{
    private $view = "backend/v_wp/";
    private $redirect = "Wajib_pajak";
    public function __construct()
    {
        parent::__construct();
        //Load model
        $this->load->model('M_wp');
        $this->load->model('M_kendaraan');
        $this->load->model('M_user');
        IsAdmin();
    }
    function index()
    {
        //memanggil model M_wp dengan function GetAll
        $read = $this->M_wp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Wajib Master",
            'sub' => "Data Pengguna Wajib Pajak",
            'read' => $read
        );
        /*
        dengan $this->view artinya memanggil private $view="backend/v_user/"
        dilanjutkan dengan 'read' untuk memanggil read.php
        */
        $this->template->load('templateAdmin/Wajib_pajak', $this->view . 'read', $data);
    }
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'id_wp' => $kd
        );
        $this->M_wp->delete($data);
        redirect($this->redirect, 'refresh');
    }

    
    public function print()
    {
        $data['print'] = $this->M_wp->GetAll();
        $read = $this->M_wp->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Data Pengguna Wajib Pajak",
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
            'judul' => "Data Pengguna Wajib Pajak",
            'read' => $read
        );
        $this->load->view($this->view . 'excel', $data);
    }
}
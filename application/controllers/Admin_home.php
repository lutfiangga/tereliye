<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Admin_home extends CI_Controller
{
    private $view = "backend/v_home_admin/";
    private $redirect = "Admin_home";
    public function __construct()
    {
        parent::__construct();
        //mengaktifkan session dengan demikian halaman ini jika dipanggil kini membutuhkan session
        IsAdmin();
    }
    public function index()
    {
        $data = array(
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Beranda",
            'sub' => "Halaman Beranda"
        );
        /*
        $this->template memanggil libraries template,
        load('backend/template' artinya memanggil file template.php,
        $this->view.'read' memanggil file read.php
        catatan: setelah kita mengetahui untuk view kali ini script ada penambahan 
        template,
        maka CRUD Admin pembalajaran sebelumnya mengikuti script seperti pada 
        control Home */
        $this->template->load('templateAdmin/Home', $this->view . 'Read', $data);
    }

}
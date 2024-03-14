<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kendaraan extends CI_Controller
{
    /*
    $view berfungsi untuk membaca file view seperti read.php, create.php
    dan edit.php dengan lokasi folder views/backend/v_kendaraan/
    */
    private $view = "backend/v_kendaraan/";
    //memanggil control kendaraan/index dalam keadaan refresh
    private $redirect = "Kendaraan";
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //control kendaraan menghubungkan model M_kendaraan
        IsAdmin();
        $this->load->model('M_kendaraan');
        $this->load->model('M_userwp');
    }
    function index()
    {
        $id_user = $this->session->userdata('id_user');

        // Memanggil model M_kendaraan dengan function GetByUserId
        $read = $this->M_kendaraan->GetByUserId($id_user);
        //memanggil model M_kendaraan dengan function GetAll
        $read = $this->M_kendaraan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "KENDARAAN",
            'sub' => "Data Kendaraan",
            'read' => $read
        );
        /*
        dengan $this->view artinya memanggil private $view="backend/v_user/"
        dilanjutkan dengan 'read' untuk memanggil read.php
        */
        $this->template->load('templateUser/Kendaraan', $this->view . 'read', $data);
    }
    public function create()
    {
        //untuk create tidak memangil model, langsung ke view dengan data baru

        $data = array(
            'username' => $this->session->userdata('username'),
            'level' => $this->session->userdata('level'),
            'judul' => "Kendaraan",
            'sub' => "Data Kendaraan",
            'wajib_pajak' => $this->M_kendaraan->GetAll(),
            'create' => ''
        );
        $this->template->load('templateUser/Kendaraan', $this->view . 'create', $data);
    }
    public function save()
    {
        $this->form_validation->set_rules('no_bpkb', 'No BPKB', 'required|is_unique[kendaraan.no_bpkb]');
        $this->form_validation->set_rules('no_stnk', 'No STNK', 'required|is_unique[kendaraan.no_stnk]');
        $this->form_validation->set_rules('no_pol', 'No Polisi', 'required|is_unique[kendaraan.no_pol]');
        $this->form_validation->set_rules('no_kerangka', 'No Kerangka', 'required|is_unique[kendaraan.no_kerangka]');
        $this->form_validation->set_rules('no_mesin', 'No Mesin', 'required|is_unique[kendaraan.no_mesin]');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, kembali ke halaman registrasi dengan error
            $data = array(
                'username' => $this->session->userdata('username'),
                'level' => $this->session->userdata('level'),
                'judul' => "Kendaraan",
                'sub' => "Data Kendaraan",
                'wajib_pajak' => $this->M_kendaraan->GetAll(),
                'create' => '',
                'bpkb' => form_error('no_bpkb'),
                'stnk' => form_error('no_stnk'),
                'plat' => form_error('no_pol'),
                'no_kerangka' => form_error('no_kerangka'),
                'no_mesin' => form_error('no_mesin')
            );
            $this->template->load('templateUser/Kendaraan', $this->view . 'create', $data);
        } else {
            // Validasi berhasil, simpan data pengguna baru
            $last_id = $this->M_kendaraan->getLastId();
            // jika tidak ditemukan, id_user diisi 1
            if ($last_id == null) {
                $id_kendaraan = 1;
            } else {
                // jika ditemukan, tambahkan 1 pada id_user terakhir
                $id_kendaraan = $last_id + 1;
            }
            $data = array(
                'id_kendaraan' => $id_kendaraan,
                'no_bpkb' => $this->input->post('no_bpkb'),
                'no_stnk' => $this->input->post('no_stnk'),
                'pemilik' => $this->input->post('pemilik'),
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'no_pol' => $this->input->post('no_pol'),
                'no_kerangka' => $this->input->post('no_kerangka'),
                'no_mesin' => $this->input->post('no_mesin'),
                'masa_berlaku' => $this->input->post('masa_berlaku'),
                'id_user' => $this->session->userdata('id_user')
            );
            $this->M_kendaraan->save($data);

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
            'judul' => "KENDARAAN",
            'sub' => "Data Kendaraan",
            //'edit' variabel yang akan dipanggil pada view edit.php
            'wajib_pajak' => $this->M_userwp->GetAll(),
            'edit' => $this->M_kendaraan->edit($kd)
        );
        $this->template->load('templateUser/Kendaraan', $this->view . 'edit', $data);
    }
    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            /*
            'nama_kendaraan' =nama yang diambil dari fild pada tabel
            $this->input->post('nama_kendaraan') =nama yang diambil dari form
            */
            'no_bpkb' => $this->input->post('no_bpkb'),
            'no_stnk' => $this->input->post('no_stnk'),
            'pemilik' => $this->input->post('pemilik'),
            'merk' => $this->input->post('merk'),
            'jenis' => $this->input->post('jenis'),
            'no_pol' => $this->input->post('no_pol'),
            'no_kerangka' => $this->input->post('no_kerangka'),
            'no_mesin' => $this->input->post('no_mesin'),
            'masa_berlaku' => $this->input->post('masa_berlaku'),
            'id_user' => $this->session->userdata('id_user')
        );
        $this->M_kendaraan->update($kd, $data);
        redirect($this->redirect, 'refresh');
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
        $data['print'] = $this->M_kendaraan->GetAll();
        $read = $this->M_kendaraan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Kendaraan Saya",
            'read' => $read
        );
        $this->load->view($this->view . 'print', $data);
    }
    public function excel()
    {
        $data['print'] = $this->M_kendaraan->GetAll();
        $read = $this->M_kendaraan->GetAll();
        $data = array(
            //'read' variabel yang akan dipanggil pada view read.php
            'judul' => "Kendaraan Saya",
            'read' => $read
        );
        $this->load->view($this->view . 'excel', $data);
    }
}
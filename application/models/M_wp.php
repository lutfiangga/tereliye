<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_wp extends CI_Model
{
    private $table = 'wajib_pajak';
    private $pk = 'id_wp';

    public function GetAll()
    {
        // $this->db->select('user.id_user, user.username, user.password,user.level, kendaraan.id_kendaraan, kendaraan.no_bpkb, kendaraan.no_stnk, 
        // kendaraan.pemilik, kendaraan.merk, kendaraan.jenis, kendaraan.no_pol, kendaraan.no_kerangka, kendaraan.no_mesin, kendaraan.masa_berlaku, 
        // wajib_pajak.id_wp, wajib_pajak.no_ktp, wajib_pajak.nama, wajib_pajak.alamat, wajib_pajak.pekerjaan');
        $this->db->join('user', 'wajib_pajak.id_user=user.id_user');
        $this->db->join('kendaraan', 'wajib_pajak.id_kendaraan=kendaraan.id_kendaraan');
        return $this->db->get($this->table);
    }

}
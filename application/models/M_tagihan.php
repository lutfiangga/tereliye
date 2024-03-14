<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_tagihan extends CI_Model
{
    private $table = 'kwitansi';
    private $pk = 'id_kwitansi';
    public function GetAll()
    {
        $this->db->order_by($this->pk, 'asc');
        $this->db->join('wajib_pajak', 'kwitansi.id_wp=wajib_pajak.id_wp');
        $this->db->join('user', 'kwitansi.id_user=user.id_user');
        $this->db->join('kendaraan', 'kwitansi.id_kendaraan=kendaraan.id_kendaraan');
        return $this->db->get($this->table);
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function GetByUserId($id_user)
    {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function edit($kd)
    {
        $this->db->where($this->pk, $kd);
        $this->db->join('wajib_pajak', 'kwitansi.id_wp=wajib_pajak.id_wp');
        $this->db->join('user', 'kwitansi.id_user=user.id_user');
        $this->db->join('kendaraan', 'kwitansi.id_kendaraan=kendaraan.id_kendaraan');
        return $this->db->get($this->table)->row_array();
    }
    public function lihat($kd)
    {
        $this->db->where($this->pk, $kd);
        $this->db->join('wajib_pajak', 'kwitansi.id_wp=wajib_pajak.id_wp');
        $this->db->join('user', 'kwitansi.id_user=user.id_user');
        $this->db->join('kendaraan', 'kwitansi.id_kendaraan=kendaraan.id_kendaraan');
        return $this->db->get($this->table)->row_array();
    }
    public function update($kd, $data)
    {
        $this->db->where($this->pk, $kd);
        return $this->db->update($this->table, $data);
    }
    public function delete($data)
    {
        $this->db->where($data);
        return $this->db->delete($this->table);
    }
    public function status($kd, $data)
    {
        $this->db->where($this->pk, $kd);
        return $this->db->update($this->table, $data);
    }

    public function bayar($kd, $data)
    {
        $this->db->where('id_kwitansi', $kd);
        $this->db->update('kwitansi', $data);
    }

}
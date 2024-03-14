<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_kendaraan extends CI_Model
{
    //$table sebagai tabel yang digunakan, dengan pemanggilannya $this->table
    private $table = 'kendaraan';
    //$pk atau Primary Key yang digunakan, dengan pemanggilannya $this->pk
    private $pk = 'id_kendaraan';
    public function GetAll()
    {
        $this->db->order_by($this->pk, 'asc');
        // $this->db->join('wajib_pajak', 'kendaraan.id_kendaraan=wajib_pajak.id_kendaraan');
        return $this->db->get($this->table);
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function getLastId()
    {
        $this->db->select_max($this->pk);
        $query = $this->db->get($this->table);
        $result = $query->row_array();

        return $result[$this->pk];
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
        // $this->db->join('kendaraan', 'wajib_pajak.id_kendaraan=kendaraan.id_kendaraan');
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
}
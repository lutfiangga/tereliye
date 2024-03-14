<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_user extends CI_Model
{
    //$table sebagai tabel yang digunakan, dengan pemanggilannya $this->table
    private $table = 'user';
    //$pk atau Primary Key yang digunakan, dengan pemanggilannya $this->pk
    private $pk = 'id_user';
    public function GetAll()
    {
        $this->db->order_by($this->pk, 'asc');
        return $this->db->get($this->table);
    }
    public function GetAdmin()
    {
        $this->db->where('level', 'admin');
        $this->db->order_by($this->pk, 'asc');
        return $this->db->get($this->table);
    }
    public function GetUser()
    {
        $this->db->where('level', 'member');
        $this->db->order_by($this->pk, 'asc');
        return $this->db->get($this->table);
    }
    public function getLastId()
    {
        $this->db->select_max('id_user');
        $query = $this->db->get('user');
        $result = $query->row_array();

        return $result['id_user'];
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function edit($kd)
    {
        $this->db->where($this->pk, $kd);
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
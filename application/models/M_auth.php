<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_auth extends CI_Model
{
	public function CekLogin($table, $pk, $user)
	{
		$this->db->where($pk, $user);
		return $this->db->get($table)->row_array();
	}
}
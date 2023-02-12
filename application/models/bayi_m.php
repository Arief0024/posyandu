<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bayi_m extends CI_Model {
	public function get($table)
	{
		$this->db->order_by('nama_bayi', 'ASC');
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDatabayi($data)
	{
		$this->db->insert('bayi', $data);
	}

	public function hapus($id){
		$this->db->where('id_bayi', $id);
		$this->db->delete('bayi');

	}

	public function ubahDatabayi($id, $data){
		$this->db->where('id_bayi', $id);
		$this->db->update('bayi', $data);
	}

}
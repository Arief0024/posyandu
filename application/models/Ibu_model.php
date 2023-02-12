<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu_model extends CI_Model {
    public function get($table)
	{
		$this->db->order_by('nama_ibu', 'ASC');
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambahDataibu($data)
	{
		$this->db->insert('ibu', $data);
	}

	public function hapus($id){
		$this->db->where('id_ibu', $id);
		$this->db->delete('ibu');

	}

	public function ubahDataibu($id, $data){
		$this->db->where('id_ibu', $id);
		$this->db->update('ibu', $data);
	}





    // MULAI CRUD DATA IBU
    // public function get(){
    //     $query = "SELECT * From ibu";
        
    //     return $this->db->query($query)->result_array();
    // }

    // public function delDataIbu($id){
    //     $this->db->where('nama_ibu', $id);
    //     $this->db->delete('id_ibu');
    // }

    // public function updDataIbu($id, $data){
    //     $this->db->where('nama_ibu', $id);
    //     $this->db->update('id_ibu', $data);
    // }
    // SELESAI CRUD DATA IBU
}

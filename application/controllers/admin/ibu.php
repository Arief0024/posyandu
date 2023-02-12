<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ibu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ibu_model');
        $this->load->library('form_validation');
    }

    // Menambahkan data ibu
        public function index()
        {
            $data['title'] = ' Data Ibu ';
            $data['ibu'] = $this->Ibu_model->get('ibu')->result_array();
            $this->form_validation->set_rules('nik_ibu', 'nik_ibu', 'required|trim');
            $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim');
            $this->form_validation->set_rules('ayah', 'nama_ayah', 'required|trim');
            $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('admin/ibu/index', $data);
                $this->load->view('layout/footer');
            } else {
            $data = [
                'nik_ibu' => html_escape($this->input->post('nik_ibu', true)),
                'nama_ibu' => html_escape($this->input->post('nama_ibu', true)),
                'nama_suami' => html_escape($this->input->post('ayah', true)),
                'alamat' => html_escape($this->input->post('alamat', true))  
            ];
            $this->Ibu_model->tambahDataibu($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Ibu Berhasil Ditambahkan.</div>');
            redirect('admin/ibu');
        }
    }

    public function ubah($id)
	{
		$data['title'] = 'ubah Data Ibu';
		$where = ['id_ibu' => $id];
		$data['ibu'] = $this->Ibu_model->get_where('ibu', $where)->row_array();
		$this->form_validation->set_rules('nik_ibu', 'nik_ibu', 'required|trim');
		$this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim');
        $this->form_validation->set_rules('ayaha', 'nama_ayah', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        
            if($this->form_validation->run() == FALSE) {
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('admin/ibu/ubah', $data);
                $this->load->view('layout/footer');
            } else {
                $id = $this->input->post('id_ibu');
                $data = [
                    'nik_ibu' => html_escape($this->input->post('nik_ibu', true)),
                    'nama_ibu' => html_escape($this->input->post('nama_ibu', true)),
                    'nama_suami' => html_escape($this->input->post('ayah', true)),
                    'alamat' => html_escape($this->input->post('alamat', true))
                    
                ];
                $this->Ibu_model->ubahDataibu($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Ibu Berhasil Diubah.</div>');
                redirect('admin/ibu');
            }
	}

	public function hapus($id)
	{
		$this->db->delete('ibu', ['id_ibu' => $id]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data ibu Berhasil Dihapus.</div>');
		redirect('admin/ibu');
	}

    public function laporan()
	{
		$data['title'] = 'Laporan Ibu';
		$data['ibu'] = $this->Ibu_model->get('ibu')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('admin/laporan/laporan_ibu');
		$this->load->view('layout/footer');
	}
}
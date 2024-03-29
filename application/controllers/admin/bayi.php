<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bayi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model bayi
		$this->load->model('bayi_m');

		$this->load->helpers('Usia_helper');

		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = '	Data Bayi';
		$data['bayi'] = $this->bayi_m->get('bayi')->result_array();
		$this->form_validation->set_rules('nik', 'Nik bayi', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama bayi', 'required|trim');
		$this->form_validation->set_rules('tempat', 'tempat', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
		$this->form_validation->set_rules('agama', 'agama', 'required|trim');
		$this->form_validation->set_rules('jk', 'Kelamin bayi', 'required|trim');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header', $data);
			$this->load->view('layout/sidebar');
			$this->load->view('admin/bayi/index', $data);
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nik_bayi' => html_escape($this->input->post('nik', true)),
				'nama_bayi' => html_escape($this->input->post('nama', true)),
				'tempat' => html_escape($this->input->post('tempat', true)),
				'tanggal' => html_escape($this->input->post('tanggal', true)),
				'agama' => html_escape($this->input->post('agama', true)),
				'jk_bayi' => html_escape($this->input->post('jk', true))
				
			];
			$this->bayi_m->tambahDatabayi($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Bayi Berhasil Ditambahkan.</div>');
			redirect('admin/bayi');
		}
	}

	public function ubah($id)
	{
		$data['title'] = 'Ubah Data Bayi';
		$where = ['id_bayi' => $id];
		$data['bayi'] = $this->bayi_m->get_where('bayi', $where)->row_array();
		$this->form_validation->set_rules('nik', 'Nik bayi', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama bayi', 'required|trim');
		$this->form_validation->set_rules('tempat', 'tempat', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
		$this->form_validation->set_rules('agama', 'agama', 'required|trim');
		$this->form_validation->set_rules('jk', 'Kelamin bayi', 'required|trim');
		
			if($this->form_validation->run() == FALSE) {
				$this->load->view('layout/header', $data);
				$this->load->view('layout/sidebar');
				$this->load->view('admin/bayi/ubah', $data);
				$this->load->view('layout/footer');
			} else {
				$id = $this->input->post('id_bayi');
				$data = [
					'nik_bayi' => html_escape($this->input->post('nik', true)),
					'nama_bayi' => html_escape($this->input->post('nama', true)),
					'tempat' => html_escape($this->input->post('tempat', true)),
					'tanggal' => html_escape($this->input->post('tanggal', true)),
					'agama' => html_escape($this->input->post('agama', true)),
					'jk_bayi' => html_escape($this->input->post('jk', true))
					
				];
				$this->bayi_m->ubahDatabayi($id, $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Bayi Berhasil Diubah.</div>');
				redirect('admin/bayi');
			}
	}

	public function hapus($id)
	{
		$this->db->delete('bayi', ['id_bayi' => $id]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Bayi Berhasil Dihapus.</div>');
		redirect('admin/bayi');
	}

	public function laporan()
	{
		$data['title'] = 'Laporan Bayi';
		$data['bayi'] = $this->bayi_m->get('bayi')->result_array();
		$this->load->view('layout/header', $data);
		$this->load->view('admin/laporan/laporan_bayi');
		$this->load->view('layout/footer');
	}

}
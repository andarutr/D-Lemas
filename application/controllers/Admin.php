<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('StudentModel');
	}

	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard - Admin D-Lemas'
		];
		$this->load->view('template/panel/header', $data);
		$this->load->view('pages/panel/dashboard');
		$this->load->view('template/panel/footer');
	}

	public function students()
	{
		$data = [
			'title' => 'Data Siswa - Admin D-Lemas',
			'students' => $this->db->get('data_siswa')
		];

		$this->load->view('template/panel/header', $data);
		$this->load->view('pages/panel/students/list', $data);
		$this->load->view('template/panel/footer');
	}

	public function students_add()
	{
		$data = [
			'title' => 'Tambah Data Siswa - Admin D-Lemas'
		];

		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama harus diisi!']);
		$this->form_validation->set_rules('nis', 'NIS', 'required', ['required' => 'NIS harus diisi!']);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required', ['required' => 'Kelas harus diisi!']);
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir harus diisi!']);
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => 'Tempat Lahir harus diisi!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat harus diisi!']);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin harus diisi!']);
		$this->form_validation->set_rules('agama', 'Agama', 'required', ['required' => 'Agama harus diisi!']);

		
		if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('template/panel/header', $data);
			$this->load->view('pages/panel/students/create', $data);
			$this->load->view('template/panel/footer');
        }else{
        	// Create using models
        	$this->StudentModel->add_data();
        	$this->session->set_userdata('berhasil_tambah_data', 'Berhasil tambah data!');
			redirect('admin/students');
        }
	}

	public function students_update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama harus diisi!']);
		$this->form_validation->set_rules('nis', 'NIS', 'required', ['required' => 'NIS harus diisi!']);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required', ['required' => 'Kelas harus diisi!']);
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir harus diisi!']);
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => 'Tempat Lahir harus diisi!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat harus diisi!']);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin harus diisi!']);
		$this->form_validation->set_rules('agama', 'Agama', 'required', ['required' => 'Agama harus diisi!']);

		
		if ($this->form_validation->run() == FALSE)
        {
        	$data = [
        		'title' => 'Perbarui Data Siswa - Admin D-Lemas',
        		'student' => $this->db->get_where('data_siswa', ['id' => $id])
        	];
        	$this->load->view('template/panel/header', $data);
			$this->load->view('pages/panel/students/update', $data);
			$this->load->view('template/panel/footer');
        }else{
        	// Create using models
        	$this->StudentModel->update_data($id);
        	$this->session->set_userdata('berhasil_perbarui_data', 'Berhasil perbarui data!');
			redirect('admin/students');
        }
	}

	public function students_delete($id)
	{
		$this->StudentModel->delete_data($id);
		$this->session->set_userdata('berhasil_delete_data', 'Berhasil hapus data!');
			redirect('admin/students');
	}
}

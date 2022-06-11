<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }

    public function add_data()
    {
    	$data = [
    		'nama' => $this->input->post('nama'),
    		'nis' => $this->input->post('nis'),
    		'kelas' => $this->input->post('kelas'),
    		'tgl_lahir' => $this->input->post('tgl_lahir'),
    		'tempat_lahir' => $this->input->post('tempat_lahir'),
    		'alamat' => $this->input->post('alamat'),
    		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    		'agama' => $this->input->post('agama'),
    	];

    	$this->db->insert('data_siswa', $data);
    }

    public function update_data($id)
    {
    	$data = [
    		'nama' => $this->input->post('nama'),
    		'nis' => $this->input->post('nis'),
    		'kelas' => $this->input->post('kelas'),
    		'tgl_lahir' => $this->input->post('tgl_lahir'),
    		'tempat_lahir' => $this->input->post('tempat_lahir'),
    		'alamat' => $this->input->post('alamat'),
    		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    		'agama' => $this->input->post('agama'),
    	];
    	$this->db->where('id',$id);
    	$this->db->update('data_siswa', $data);
    }

    public function delete_data($id)
    {
    	$this->db->where('id',$id);
    	$this->db->delete('data_siswa');
    }
}
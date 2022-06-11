<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$email = htmlspecialchars($this->input->post('email', TRUE));
		$password = $this->input->post('password');
		$admin = $this->db->get_where('admin', ['email' => $email])->row_array();

		if($admin)
		{
			if(password_verify($password, $admin['password']))
			{
				$data = [
					'email' => $admin['email'],
				];

				// Save Session
				$this->session->set_userdata($data);

				redirect('admin/dashboard');
			}else{
				$this->session->set_userdata('gagal', 'Username dan password salah!');
				redirect('auth/index');
			}
		}else{
			$this->session->set_userdata('gagal', 'Username dan password salah!');
			redirect('auth/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
    	redirect('auth/index');
	}
}

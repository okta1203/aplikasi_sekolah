<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_controller {

    public function __construct()
	{

		parent::__construct();
		$this->load->model('m_user');
	}

    public function index()
	{
		$this->load->view('register');
	}
public function proses()
{
	$username = $this->input->post('username');
	$email = $this->input->post('email');
	$pass =  $this->input->post('pass');
	$re_pass =  $this->input->post('re_pass');
	$id_user_level = 2;
	$id_status_verifikasi = 2;
	$id_status_lulus = 2;
	$id_user = md5($username.$email.$pass.rand(1, 99999));
	
	if ($pass == $re_pass) {

		$hasil = $this->m_user->register_user($id_user, $username, $email, $pass, 
		$id_user_level, $id_status_verifikasi, $id_status_lulus);

		if ($hasil == false) { 
			echo "benar";
			die();
			$this->session->set_flashdata('eror_register','eror_register');
			redirect('Register/index');

		} else {

			$this->session->set_flashdata('register','register');
			redirect('login/index');

		}

	} else{

		$this->session->set_flashdata('eror_passwoerd','eror_password');
			redirect('Register/index');

	}
}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller {
    
    public function index()
	{
		$this->load->view('login');
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_membro extends CI_Controller {

	public function index()
	{
        $this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('login_membro');
	}
}

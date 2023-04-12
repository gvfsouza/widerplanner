<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_cliente extends CI_Controller {

	public function index()
	{
		$this->load->view('login_cliente');
	}
}

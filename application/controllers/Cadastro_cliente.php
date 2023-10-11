<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_cliente extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
		
	  if (isset($_POST)) {
		if (!empty($_POST)) {
		  anti_injection($_POST);
		}
	  }
	}
	
	public function index()
	{
		// $this->load->view('layout/header');
		// $this->load->view('layout/sidebar');
		// $this->load->view('layout/navbar');
		$this->load->view('cadastro_cliente');
		// $this->load->view('layout/footer');
	}
}

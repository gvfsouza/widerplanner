<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_produto extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		// Carregue o arquivo functions_helper
		$this->load->helper('functions_helper');
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$_POST = $this->clean_post_data($_POST);
		}
		$this->load->database();
	}

	private function clean_post_data($data)
	{
		foreach ($data as $key => $value) {
			$data[$key] = anti_injection($value);
		}
		return $data;
	}
	
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		// $this->load->view('layout/navbar');
		$this->load->view('cadastro_produto');
		$this->load->view('layout/footer');
	}
}

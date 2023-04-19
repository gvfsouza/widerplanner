<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  //direciona para a página de login quando perde a sessão
		if($this->session->userdata('codigo_funcionario')==null) redirect('login');
		
	  if (isset($_POST)) {
		if (!empty($_POST)) {
		  anti_injection($_POST);
		}
		
	  }
	}
	
	public function index()
	{
		$this->load->view('servicos');
	}
}

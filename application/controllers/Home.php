2<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();

	  $this->load->database();
		
	  if (isset($_POST)) {
		if (!empty($_POST)) {
		  anti_injection($_POST);
		}
	  }
	}
	
	public function index()
	{
		// Conexão com o Model
		$this->load->model('Home_model');

		$dados['listar_estabelecimento'] = $this->Home_model->listar_estabelecimento();

		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('home', $dados);
		$this->load->view('layout/footer');
	}

}

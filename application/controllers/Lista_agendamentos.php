<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_agendamentos extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('cpf_usuario') == null) redirect('login'); //direciona para a página de login quando perde a sessão

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
		// Conexão com o Model
		$this->load->model('Agendamento_model');

		$dados['listar_agendamentos_realizados'] = $this->Agendamento_model->listar_agendamentos_realizados();
		$dados['listar_profissionais_agendamentos'] = $this->Agendamento_model->listar_profissionais_agendamentos();
		$dados['listar_servicos_agendamentos'] = $this->Agendamento_model->listar_servicos_agendamentos();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('lista_agendamentos',$dados);
		$this->load->view('layout/footer');
	}
}

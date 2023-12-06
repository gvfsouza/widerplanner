<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$this->load->model('Home_model');

		$dados['listar_dados_estabelecimento'] = $this->Home_model->listar_dados_estabelecimento();
		$dados['listar_dados_produtos'] = $this->Home_model->listar_dados_produtos();
		$dados['listar_dados_servicos'] = $this->Home_model->listar_dados_servicos();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('home', $dados);
		$this->load->view('layout/footer');
	}

	public function excluir_servico($id_servicos)
	{
		// Conexão com o Model
		$this->load->model('Home_model');

		$this->Home_model->excluir_servico($id_servicos);
		redirect('home');
	}

	public function excluir_produto($id_produto)
	{
		// Conexão com o Model
		$this->load->model('Home_model');

		$this->Home_model->excluir_produto($id_produto);
		redirect('home');
	}
}

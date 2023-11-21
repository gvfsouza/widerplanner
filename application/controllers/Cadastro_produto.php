<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro_funcionario extends CI_Controller
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
		$this->load->model('Produto_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$foto_produto = $this->input->post('foto_produto');
			$nome_produto = $this->input->post('nome_produto');
			$descricao_produto = $this->input->post('descricao_produto');
			$valor_produto = $this->input->post('valor_produto');
			$qtde_produto = $this->input->post('qtde_produto');

			if (!isset($error)) {
				$dados['cadastro_produto'] = $this->Produto_model->cadastro_produto($foto_produto, $nome_produto, $valor_produto, $qtde_produto, $descricao_produto);

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Produto cadastrado com sucesso!');
				redirect('cadastro_produto');
			} else {
				$this->session->set_flashdata('erro', 'Erro ao efetuar cadastro de Produto.');
			}
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('cadastro_produto', $dados);
		// $this->load->view('layout/footer');
	}
}

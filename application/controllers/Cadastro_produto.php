<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro_Produto extends CI_Controller
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
			$foto_produto = $_FILES['foto_produto'];
			$nome_produto = $this->input->post('nome_produto');
			$descricao_produto = $this->input->post('descricao_produto');
			$valor_produto = $this->input->post('valor_produto');
			$qtde_produto = $this->input->post('qtde_produto');

			// FOTO - EXTENSÃO
			// acessa o nome original do arquivo
			$path = $_FILES['foto_produto']['name'];

			// extensão do arquivo
			$ext = pathinfo($path, PATHINFO_EXTENSION);

			// Configuração foto
			$config['upload_path'] = './application/fotos';
			// tipo permitido
			$config['allowed_types'] = 'jpg|jpeg|png|';
			// tamanho permitido
			$config['max_size']  = 2048;
			// $config['max_width']  = 1024;
			// $config['max_height'] = 768;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!isset($error)) {

				if (isset($foto_produto['name'])) {
					if (!$this->upload->do_upload('foto_animal')) {
						$error = array('error' => $this->upload->display_errors());
						$foto_produto = $upload_data['file_name'];

						$this->session->set_flashdata('erro', $error['error']);
						$this->session->set_flashdata('erro_upload', 'Não foi possível fazer upload da foto.');
					}
				}

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

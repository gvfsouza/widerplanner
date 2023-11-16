<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro_servicos extends CI_Controller
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
		$this->load->model('Servicos_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$arquivo = $_FILES['arquivo'];
			$nome_servico = $this->input->post('nome_servico');
			$descricao_servico = $this->input->post('descricao_servico');
			$valor_servico = $this->input->post('valor_servico');
			$duracao_servico = $this->input->post('duracao_servico');

			$config['upload_path']          = './arquivos/';
			$config['allowed_types']        = '*';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['max_size']             = 0;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
		
			for ($i = 0; $i < count($arquivo['name']); $i++) {
				if ($arquivo['size'][$i] == "") {
					$arquivo_[] = "";
				} else {
					$_FILES['arquivo']['name'] = $arquivo['name'][$i];
					$_FILES['arquivo']['type'] = $arquivo['type'][$i];
					$_FILES['arquivo']['tmp_name'] = $arquivo['tmp_name'][$i];
					$_FILES['arquivo']['error'] = $arquivo['error'][$i];
					$_FILES['arquivo']['size'] = $arquivo['size'][$i];
		
					if (!$this->upload->do_upload('arquivo')) {
						$error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata('erro', $error['erro']);
					} else {
						$arquivo_[] = $this->upload->data('file_name');
					}
				}
			}

			if (!isset($error)) {
				$dados['cadastro_servicos'] = $this->Servicos_model->cadastro_servicos($arquivo_, $nome_servico, $descricao_servico, $valor_servico, $duracao_servico);

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Cadastro de Serviços realizado com sucesso!');
				redirect('cadastro_servicos');
			} else {
				$this->session->set_flashdata('erro', 'Erro ao efetuar cadastro de serviços.');
			}
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('cadastro_servicos', $dados);
		// $this->load->view('layout/footer');
	}
}

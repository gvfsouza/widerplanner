<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
		$this->load->model('Servicos_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$foto_produto = $_FILES['foto_produto'];
			$nome_produto = $this->input->post('nome_produto');
			$descricao_produto = $this->input->post('descricao_produto');
			$valor_produto = $this->input->post('valor_produto');
			$duracao_produto = $this->input->post('duracao_produto');

			$config['upload_path']          = './arquivos/';
			$config['allowed_types']        = '*';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['max_size']             = 0;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
		
			for ($i = 0; $i < count($foto_servico['name']); $i++) {
				if ($foto_servico['size'][$i] == "") {
					$foto_servico[] = "";
				} else {
					$_FILES['arquivo']['name'] = $foto_produto['name'][$i];
					$_FILES['arquivo']['type'] = $foto_produto['type'][$i];
					$_FILES['arquivo']['tmp_name'] = $foto_produto['tmp_name'][$i];
					$_FILES['arquivo']['error'] = $foto_produto['error'][$i];
					$_FILES['arquivo']['size'] = $foto_produto['size'][$i];
		
					if (!$this->upload->do_upload('arquivo')) {
						$error = array('erro' => $this->upload->display_errors());
						$this->session->set_flashdata('erro', $error['erro']);
					} else {
						$arquivo_[] = $this->upload->data('file_name');
					}
				}
			}

			if (!isset($error)) {
				$dados['cadastro_servicos'] = $this->Servicos_model->cadastro_servicos($foto_produto, $nome_produto, $descricao_produto, $valor_produto, $qtde_produto);

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Cadastro de Produto realizado com sucesso!');
				redirect('cadastro_servicos');
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

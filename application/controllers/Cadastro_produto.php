<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro_Produto extends CI_Controller
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
		$this->load->model('Produto_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$foto_produto = $this->converte_img($_FILES['foto_produto']['tmp_name'],$_FILES['foto_produto']['type']);
			$nome_produto = $this->input->post('nome_produto');
			$descricao_produto = $this->input->post('descricao_produto');
			$valor_produto = $this->input->post('valor_produto');
			$qtde_produto = $this->input->post('qtde_produto');

			// FOTO - EXTENSÃO
			$path = $_FILES['foto_produto']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$config['upload_path'] = './application/fotos';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 2048;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

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

	public function converte_img($img, $type)
	{
		if ($type == 'image/png') {
			$im = imagecreatefrompng($img);
			ob_start();
			imagejpeg($im);
			$data = ob_get_clean();
			imagedestroy($im);
		} else {
			ob_start();
			readfile($img);
			$data = ob_get_clean();
		}
		return base64_encode($data);
	}
}

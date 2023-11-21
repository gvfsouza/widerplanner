<?php defined('BASEPATH') or exit('No direct script access allowed');

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
			$foto_servico = $this->converte_img($_FILES['foto_servico']['tmp_name'],$_FILES['foto_servico']['type']);
			$nome_servico = $this->input->post('nome_servico');
			$descricao_servico = $this->input->post('descricao_servico');
			$valor_servico = $this->input->post('valor_servico');
			$duracao_servico = $this->input->post('duracao_servico');

			// FOTO - EXTENSÃO
			$path = $_FILES['foto_servico']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$config['upload_path'] = './application/fotos';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 2048;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
		
			if (!isset($error)) {
				$dados['cadastro_servicos'] = $this->Servicos_model->cadastro_servicos($foto_servico, $nome_servico, $descricao_servico, $valor_servico, $duracao_servico);

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

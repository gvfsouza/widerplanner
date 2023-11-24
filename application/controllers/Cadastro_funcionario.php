<?php defined('BASEPATH') or exit('No direct script access allowed');

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
		$this->load->model('Funcionario_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$foto_usuario = $this->converte_img($_FILES['foto_usuario']['tmp_name'], $_FILES['foto_usuario']['type']);
			$nome_usuario = $this->input->post('nome_usuario');
			$cpf_usuario = $this->input->post('cpf_usuario');
			$dt_nasc_usuario = $this->input->post('dt_nasc_usuario');
			$email_usuario = $this->input->post('email_usuario');
			$sexo_usuario = $this->input->post('sexo_usuario');
			$telefone_usuario = $this->input->post('telefone_usuario');
			$cep_usuario = $this->input->post('cep_usuario');
			$logradouro_usuario = $this->input->post('logradouro_usuario');
			$numero_usuario = $this->input->post('numero_usuario');
			$complemento_usuario = $this->input->post('complemento_usuario');
			$bairro_usuario = $this->input->post('bairro_usuario');
			$cidade_usuario = $this->input->post('cidade_usuario');
			$estado_usuario = $this->input->post('estado_usuario');
			$fk_servicos = $this->input->post('fk_servicos');

			echo $fk_servicos . 'teste';
			die();

			if (!isset($error)) {

				$dados['cadastro_funcionario'] = $this->Funcionario_model->cadastro_profissional($foto_usuario, $nome_usuario, $cpf_usuario, $dt_nasc_usuario, $email_usuario, $sexo_usuario, $telefone_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $estado_usuario, $fk_servicos, md5(gerarSenhaAleatoria(8)));

				// Captura o ID do usuário recém-cadastrado
				$id_func = $dados['cadastro_funcionario'];

				// Captura o ID do serviço selecionado
				$servico_escolhido = $this->input->post('fk_servico');

				// Insere na tabela func_servicos
				$this->Funcionario_model->associar_servico($id_func, $servico_escolhido);

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Cadastro realizado com sucesso!');
				redirect('cadastro_funcionario');
			} else {
				$this->session->set_flashdata('erro', 'Erro ao efetuar cadastro de Funcionário.');
				salvar_log('Cadastro Funcionário - Erro ao efetuar cadastro de Funcionário.');
			}
		}

		$dados['listar_servicos'] = $this->Funcionario_model->listar_servicos();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('cadastro_funcionario', $dados);
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

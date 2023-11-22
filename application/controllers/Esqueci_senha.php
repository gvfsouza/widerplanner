<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Esqueci_senha extends CI_Controller
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
		$this->load->model('Login_model');



		if (isset($_POST['enviar'])) {
			$this->load->library('encryption');

			// $cpf_usuario = $_POST['cpf_usuario'];
			// $email_usuario = $_POST['email_usuario'];

			// Verifica se a chave 'cpf_usuario' está definida no array $_POST
			$cpf_usuario = isset($_POST['cpf_usuario']) ? $_POST['cpf_usuario'] : null;

			// Verifica se a chave 'email_usuario' está definida no array $_POST
			$email_usuario = isset($_POST['email_usuario']) ? $_POST['email_usuario'] : null;

			if ($cpf_usuario == '' || $email_usuario == '') {
				$this->session->set_flashdata('error', 'Todos os campos devem ser preenchidos.');
				// redirect('esqueci_senha');
			} else {
				if (!isset($error)) {

					$dados = $this->Login_model->esqueci_senha($cpf_usuario, $email_usuario);

					$link_esqueci_senha = base_url() . 'esqueci_senha/recuperar_senha/';

					//ENVIA EMAIL DE RECUPERAÇÃO
					$this->load->library('email');
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->from('contato@agsete.com.br', 'widerplanner');
					$this->email->to($email_usuario);
					$this->email->subject('WiderPlanner - Dados para recuperar senha');

					$info_email['nome'] = $dados->nome_usuario;
					$info_email['link_esqueci_senha'] = $link_esqueci_senha;

					$mensagem = 'Olá ' . $nome_usuario . ',<br><br>';
					$mensagem .= 'Vimos que você solicitou para recuperar a senha<br>';
					$mensagem .= 'Pra criar uma senha nova, <strong>Clique aqui</strong>' . $link_esqueci_senha . '</strong><br><br>';

					$this->email->message($mensagem);
					if ($this->email->send()) {
						$this->session->set_flashdata('success_email', 'Verifique sua caixa de e-mails para recuperar a senha');
					} else {
						$this->session->set_flashdata('error_email', 'Erro ao enviar e-mail');
					}
				}
			}
		}

		$this->load->view('layout/header');
		$this->load->view('esqueci_senha');
	}

	public function recuperar_senha()
	{
		$this->load->model('Login_model');

		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($explode_chave[1], $_POST['nova_senha'])) {
			$data_hora = $explode_chave[0];
			$cpf_usuario = $explode_chave[1];

			$nova_senha = $_POST['nova_senha'];
			$confirma_senha = $_POST['confirma_senha'];

			if ($nova_senha != $confirma_senha) {
				$this->session->set_flashdata('error', 'As senhas não conferem');
			} else {
				$this->login_model->altera_senha($cpf_usuario, $nova_senha);
				$this->session->set_flashdata('sucesso', 'Senha recuperada com sucesso!');
				redirect('login/');
			}
		}


		$this->load->view('layout/header');
		$this->load->view('recuperar_senha');
	}
}
<?php defined('BASEPATH') or exit('No direct script access allowed');

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

			$cpf_usuario = isset($_POST['cpf_usuario']) ? trim($_POST['cpf_usuario']) : null;
			$email_usuario = isset($_POST['email_usuario']) ? trim($_POST['email_usuario']) : null;


			if ($cpf_usuario == '' || $email_usuario == '') {
				$this->session->set_flashdata('erro', 'Todos os campos devem ser preenchidos.');
			} else {
				$dados = $this->Login_model->esqueci_senha($cpf_usuario, $email_usuario);

				if ($dados) {
					$link_esqueci_senha = base_url() . 'esqueci_senha/recuperar_senha/' . $dados->chave_recuperacao;

					$this->load->library('email');
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->from('contato@agsete.com.br', 'widerplanner');
					$this->email->to($email_usuario);
					$this->email->subject('WiderPlanner - Esqueci Senha');
		
					$corpo_email['nome_usuario'] = $nome_usuario;
		
					$mensagem = 'Olá ' . $nome_usuario . ',<br><br>';
					$mensagem .= 'Vimos que você solicitou para recuperar a senha.<br><br>';
					$mensagem .= 'Para criar uma nova senha, <strong><a href="' . $link_esqueci_senha . '">CLIQUE AQUI</a></strong><br><br>';
		
					$this->email->message($mensagem);

					$this->session->set_flashdata('success_email', 'Verifique sua caixa de e-mails para recuperar a senha');
				} else {
					$this->session->set_flashdata('error', 'Usuário não encontrado.');
				}
			}
		}

		// Descomente esta linha se desejar redirecionar após o envio do e-mail
		// redirect('esqueci_senha');

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
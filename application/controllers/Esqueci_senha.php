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

        $cpf_usuario = isset($_POST['cpf_usuario']) ? $_POST['cpf_usuario'] : null;
        $email_usuario = isset($_POST['email_usuario']) ? $_POST['email_usuario'] : null;

        if (empty($cpf_usuario) || empty($email_usuario)) {
            $this->session->set_flashdata('error', 'Todos os campos devem ser preenchidos.');
        } else {
            // Removida a verificação de $error, pois não é usada
            $dados = $this->Login_model->esqueci_senha($cpf_usuario, $email_usuario);

            if ($dados) {
                $link_esqueci_senha = base_url() . 'esqueci_senha/recuperar_senha/' . $dados->chave_recuperacao;

                // Restante do código do envio de e-mail aqui

                $this->session->set_flashdata('success_email', 'Verifique sua caixa de e-mails para recuperar a senha');
            } else {
                $this->session->set_flashdata('error', 'Usuário não encontrado.');
            }
        }
    }

    // Descomente esta linha se desejar redirecionar após o envio do e-mail
    redirect('esqueci_senha');

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
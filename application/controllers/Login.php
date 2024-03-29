<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Carrega o arquivo functions_helper
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

		if (isset($_POST['Entrar'])) {

			$cpf_usuario = $this->input->post('cpf_usuario');

			$senha = $this->input->post('senha');
		}

		$this->load->view('login');
	}

	public function login()
	{
		$this->load->model('Login_model');

		$senha = $this->security->xss_clean($this->input->post('senha'));
		$cpf_usuario = $this->security->xss_clean($this->input->post('cpf_usuario'));

		// Se o usuário já estiver logado, redirecione para o painel
		if ($this->session->userdata('logged_in')) {
			redirect('home');
		}

		$this->load->library('form_validation');

		// Regras de validação
		$this->form_validation->set_rules('cpf_usuario', 'CPF do Usuário', 'trim|required');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			// Carrega a visualização de login com erros de validação
			$this->load->view('login');
		} else {
			// Valida as credenciais do usuário
			$cpf_usuario = $this->input->post('cpf_usuario');
			$senha = $this->input->post('senha');

			$user = $this->Login_model->autenticacao_usuario($cpf_usuario, $senha);

			if ($user) {
				$dados_usuario = $this->Login_model->salvar_dados_sessao($cpf_usuario);
				$fk_usuario = $dados_usuario['fk_usuario'];
				$nome_usuario = $dados_usuario['nome_usuario'];
				$profissional = $dados_usuario['profissional'];

				$this->session->set_userdata('cpf_usuario', $cpf_usuario);
				$this->session->set_userdata('fk_usuario', $fk_usuario);
				$this->session->set_userdata('nome_usuario', $nome_usuario);
				$this->session->set_userdata('profissional', $profissional);

				// Configura dados da sessão do usuário e redireciona para o painel
				// $this->session->set_flashdata('sucesso', 'Login efetuado com sucesso!');
				redirect('home');
			} else {
				$this->session->set_flashdata('error', 'CPF do usuário ou senha inválidos');
    			redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("cpf_usuario");
		redirect('login');
	}

	private function anti_injection($data)
	{
		$this->security->xss_clean($data);
	}

}
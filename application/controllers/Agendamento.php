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
		$this->load->model('Agendamento_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$fk_dia_semana = $this->input->post('fk_dia_semana');

			if (!isset($error)) {

				$dados['cadastro_funcionario'] = $this->Agendamento_model->cadastro_profissional($fk_dia_semana));

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Cadastro realizado com sucesso!');
				redirect('cadastro_funcionario');
			} else {
				$this->session->set_flashdata('erro', 'Erro ao efetuar cadastro de Funcionário.');
			}
		}

		$dados['listar_diasemana'] = $this->Agendamento_model->listar_diasemana();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('agendamento', $dados);
	}

}
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Agendamento extends CI_Controller
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

		if ($this->input->post('salvar')) {
			$data_agenda = $this->input->post('data_agenda');
			$fk_hora = $this->input->post('fk_hora');
			$fk_servicos = $this->input->post('fk_servicos');
			$fk_profissional = $this->input->post('fk_profissional');
			$fk_agenda = $this->input->post('fk_agenda');

			var_dump($_POST);
			// Verifique se as variáveis estão definidas
			if (isset($data_agenda, $fk_hora, $fk_servicos, $fk_profissional)) {

				$fk_usuario = $this->session->userdata('fk_usuario');

				$dados['cadastro_agenda'] = $this->Agendamento_model->cadastro_agenda($data_agenda, $fk_hora, $fk_servicos, $fk_profissional, $fk_usuario, $fk_agenda);

				foreach ($fk_servicos as $value) {
					$this->Agendamento_model->associarServico($fk_agenda, $value);
				}

				// MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Agendamento realizado com sucesso!');

			} else {
				$this->session->set_flashdata('erro', 'Erro ao efetuar o agendamento de Horário.');
			}
		}

		$dados['listar_servicos'] = $this->Agendamento_model->listar_servicos();
		$dados['listar_hora'] = $this->Agendamento_model->listar_hora();
		$dados['listar_profissionais'] = $this->Agendamento_model->listar_profissionais();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('agendamento', $dados);
	}
}
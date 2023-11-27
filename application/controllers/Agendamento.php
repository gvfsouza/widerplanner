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

		$data_agenda = $this->input->post('data_agenda');
		$fk_hora = $this->input->post('fk_hora');
		$fk_servicos = $this->input->post('fk_servicos');
		$fk_profissional = $this->input->post('fk_profissional');

		// Verifica se o formulário foi submetido e as variáveis estão definidas
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['salvar']) && isset($data_agenda) && isset($fk_hora) && isset($fk_servicos) && isset($fk_profissional)) {
			// Verifica se o horário escolhido está ocupado
			$horario_ocupado = $this->Agendamento_model->verificarHorarioOcupado($data_agenda, $fk_profissional, $fk_hora);

			if (!$horario_ocupado) {
				// Obtenha o fk_usuario da sessão
				$fk_usuario = $this->session->userdata('fk_usuario');

				// Se necessário, adicione verificação para garantir que $fk_usuario seja válido

				$dados['agendamento'] = $this->Agendamento_model->cadastro_agenda($data_agenda, $fk_hora, $fk_servicos, $fk_profissional, $fk_usuario);

				// Captura o ID da agenda recém cadastrada
				$fk_agenda = $dados['agendamento'];

				// Insere na tabela func_servicos
				foreach ($fk_servicos as $value) {
					$this->Agendamento_model->associarServico($fk_agenda, $value);
				}

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Agendamento realizado com sucesso!');
				redirect('agendamento');
			} else {
				$this->session->set_flashdata('erro', 'O horário escolhido já está ocupado. Por favor, escolha outro horário.');
			}
		}

		// Consulta para obter os horários já preenchidos para a data e o profissional escolhidos
		// Certifique-se de que $data_agenda e $fk_profissional estejam definidos antes de chamar a função
		if (isset($data_agenda) && isset($fk_profissional)) {
			$horarios_ocupados = $this->Agendamento_model->horariosOcupados($data_agenda, $fk_profissional);

			// Carrega os dados na view, removendo os horários já ocupados da lista de horários disponíveis
			$dados['listar_hora'] = array_diff($this->Agendamento_model->listar_hora(), $horarios_ocupados);
		}

		$dados['listar_servicos'] = $this->Agendamento_model->listar_servicos();
		$dados['listar_profissionais'] = $this->Agendamento_model->listar_profissionais();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('agendamento', $dados);
	}

}
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

        log_message('debug', 'Data Agenda: ' . $data_agenda);
        log_message('debug', 'Hora: ' . $fk_hora);
        log_message('debug', 'Serviços: ' . json_encode($fk_servicos));
        log_message('debug', 'Profissional: ' . $fk_profissional);

        // Verifique se as variáveis estão definidas
        if (!empty($data_agenda) && !empty($fk_hora) && !empty($fk_servicos) && !empty($fk_profissional)) {
            $fk_usuario = $this->session->userdata('fk_usuario');

            log_message('debug', 'Usuário: ' . $fk_usuario);

            $fk_agenda = $this->Agendamento_model->cadastro_agenda($data_agenda, $fk_hora, $fk_servicos, $fk_profissional, $fk_usuario);

            log_message('debug', 'ID Agenda: ' . $fk_agenda);

            if ($fk_agenda) {
                // Associar serviços ao agendamento
                foreach ($fk_servicos as $servico_id) {
                    $insert_data = array('fk_agenda' => $fk_agenda, 'fk_servicos' => $servico_id);
                    $insert_result = $this->db->insert('agenda2', $insert_data);

                    log_message('debug', 'Associação de Serviço: ' . json_encode($insert_data));

                    if (!$insert_result) {
                        log_message('error', 'Erro ao associar serviço ao agendamento.');
                        $this->session->set_flashdata('erro', 'Erro ao associar serviço ao agendamento.');
                        redirect('agendamento');
                    }
                }

                // MENSAGEM SUCESSO AO CADASTRAR
                $this->session->set_flashdata('sucesso', 'Agendamento realizado com sucesso!');
                redirect('agendamento');
            } else {
                log_message('error', 'Erro ao efetuar o agendamento de Horário.');
                $this->session->set_flashdata('erro', 'Erro ao efetuar o agendamento de Horário.');
                redirect('agendamento');
            }
        } else {
            log_message('error', 'Erro ao efetuar o agendamento de Horário. Verifique se todos os campos foram preenchidos corretamente.');
            $this->session->set_flashdata('erro', 'Erro ao efetuar o agendamento de Horário. Verifique se todos os campos foram preenchidos corretamente.');
            redirect('agendamento');
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
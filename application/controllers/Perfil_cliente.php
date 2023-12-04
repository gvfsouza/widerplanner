<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perfil_cliente extends CI_Controller
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
		$this->load->model('Cliente_model');

		$cpf_usuario = $this->session->userdata('cpf_usuario');

			if ($this->input->post('salvar')) {
				if (
					$dados_cliente->telefone_usuario !== $telefone_usuario ||
					$dados_cliente->cep_usuario !== $cep_usuario ||
					$dados_cliente->numero_usuario !== $numero_usuario ||
					$dados_cliente->complemento_usuario !== $complemento_usuario
				) {
					$this->Cliente_model->editar_dados_pesoais(
						$dados_cliente->id_usuario,
						$telefone_usuario,
						$cep_usuario,
						$numero_usuario,
						$complemento_usuario
					);
		
					$this->session->set_flashdata('sucesso', 'Alterações efetuadas com sucesso!');
					redirect('cadastro_cliente');
				} else {
					$this->session->set_flashdata('erro', 'Nenhum dado foi alterado.');
				}
			}
		
			$dados['dados_cliente'] = $this->Cliente_model->dados_cliente($cpf_usuario);
			$dados['historico_agendamentos_realizados'] = $this->Cliente_model->historico_agendamentos_realizados();
			$dados['historico_profissionais_agendamentos'] = $this->Cliente_model->historico_profissionais_agendamentos();
			$dados['historico_servicos_agendamentos'] = $this->Cliente_model->historico_servicos_agendamentos();
		
			$this->load->view('layout/header');
			$this->load->view('layout/sidebar');
			$this->load->view('layout/navbar');
			$this->load->view('perfil_cliente', $dados);
			$this->load->view('layout/footer');
	
		}
}

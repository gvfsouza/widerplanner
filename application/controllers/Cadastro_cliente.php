<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro_cliente extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (isset($_POST)) {
			if (!empty($_POST)) {
				anti_injection($_POST);
			}
		}
	}

	public function index()
	{
		$this->load->model('Cliente_model');

		if (isset($_POST['salvar'])) {
			$nome_usuario = $this->input->post('nome_usuario');
			$cpf_usuario = $this->input->post('cpf_usuario');
			$dt_nasc_usuario = $this->input->post('dt_nasc_usuario');
			$sexo_usuario = $this->input->post('sexo_usuario');
			$celular_usuario = $this->input->post('celular_usuario');
			$cep_usuario = $this->input->post('cep_usuario');
			$logradouro_usuario = $this->input->post('logradouro_usuario');
			$numero_usuario = $this->input->post('numero_usuario');
			$complemento_usuario = $this->input->post('complemento_usuario');
			$bairro_usuario = $this->input->post('bairro_usuario');
			$cidade_usuario = $this->input->post('cidade_usuario');
			$uf_usuario = $this->input->post('uf');

			if (!isset($error)) {
				$dados['cadastro_cliente'] = $this->Cliente_model->cadastro_cliente($nome_usuario, $cpf_usuario, $dt_nasc_usuario, $sexo_usuario, $celular_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $uf_usuario);

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Cadastro realizado com sucesso!');
				redirect('/cadastro_cliente');
			}else{
				$this->session->set_flashdata('erro', 'Erro ao efetuar cadastro.');
			}
		}




		$this->load->view('layout/header');
		$this->load->view('cadastro_cliente', $dados);
	}
}

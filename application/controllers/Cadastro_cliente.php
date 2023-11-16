<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro_cliente extends CI_Controller
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
        $dados = array();
		

        if (isset($_POST['salvar'])) {
            $nome_usuario = $this->input->post('nome_usuario');
            $cpf_usuario = $this->input->post('cpf_usuario');
            $dt_nasc_usuario = $this->input->post('dt_nasc_usuario');
            $email_usuario = $this->input->post('email_usuario');
            $sexo_usuario = $this->input->post('sexo_usuario');
            $telefone_usuario = $this->input->post('telefone_usuario');
            $cep_usuario = $this->input->post('cep_usuario');
            $logradouro_usuario = $this->input->post('logradouro_usuario');
            $numero_usuario = $this->input->post('numero_usuario');
            $complemento_usuario = $this->input->post('complemento_usuario');
            $bairro_usuario = $this->input->post('bairro_usuario');
            $cidade_usuario = $this->input->post('cidade_usuario');
            $uf_usuario = $this->input->post('uf');

            // gerarSenhaAleatoria função do arquivo functions_helper
            $senha_gerada = gerarSenhaAleatoria(8);

            $senha_criptografada = md5($senha_gerada);


            $linkAcesso = 'https://widerplanner.agsete.com.br/login'; // Link para a página de login

           

           
            if (!isset($error)) {
                // $dados['cadastro_cliente'] = $this->Cliente_model->cadastro_cliente($nome_usuario, $cpf_usuario, $dt_nasc_usuario, $email_usuario, $sexo_usuario, $telefone_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $uf_usuario, $senha_criptografada);

                 $this->Cliente_model->cadastro_cliente($nome_usuario, $cpf_usuario, $dt_nasc_usuario, $email_usuario, $sexo_usuario, $telefone_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $uf_usuario, $senha_criptografada);

				$this->load->library('email');
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from('contato@agsete.com.br', 'widerplanner');
				$this->email->to($email_usuario); // Endereço de e-mail do usuário
				$this->email->subject('WiderPlanner - Dados de acesso ao sistema');
				// $this->email->message('Sua nova senha de acesso é: ' . $password);
	
				$corpo_email['nome_usuario'] =     $nome_usuario;
				$corpo_email['linkAcesso'] = $linkAcesso;
				$corpo_email['senha_gerada'] = $senha_gerada;
	
				// Corpo do E-mail
				$mensagem = 'Olá ' . $nome_usuario . ',<br><br>';
				$mensagem .= 'Para acessar o sistema, utilize o seu CPF e senha abaixo:<br><br>';
				$mensagem .= 'Sua senha de acesso ao sistema é: <strong>' . $senha_gerada . '</strong><br><br>';
				$mensagem .= '*Lembre-se de alterar sua senha após o primeiro login.<br><br>';
				$mensagem .= 'Você pode acessar o sistema através do seguinte link: <a href="' . $linkAcesso . '">Acessar o Sistema</a><br><br>';

				$this->email->message($mensagem);
				// $this->db->trans_start();

				if ($this->email->send()) {
					$this->session->set_flashdata('success_email', 'Verifique sua caixa de e-mails para acessar o sistema.');
				} else {
					$this->session->set_flashdata('error_email', 'Erro ao enviar e-mail.');
				}

                //MENSAGEM SUCESSO AO CADASTRAR
                $this->session->set_flashdata('sucesso', 'Cadastro realizado com sucesso!');
                redirect('cadastro_cliente');
            } else {
                $this->session->set_flashdata('erro', 'Erro ao efetuar cadastro.');
            }
        }

        $this->load->view('layout/header');
        $this->load->view('cadastro_cliente');
    }
}
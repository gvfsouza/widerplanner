<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alterar_senha extends CI_Controller
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

        $cpf_usuario = $this->session->userdata('cpf_usuario');

        if (isset($_POST['salvar'])) {

            $senha_atual = $_POST['senha_atual'];
            $nova_senha = $_POST['nova_senha'];
            $confirma_senha = $_POST['confirma_senha'];

            $senhaAntiga = $this->Login_model->verifica_senha_atual($cpf_usuario, $senha_atual);

            if ($senha_atual == '' || $nova_senha == '' || $confirma_senha == '') {
                $this->session->set_flashdata('erro', 'Todos os campos devem ser preenchidos.');
            } else {
                if ($senhaAntiga != null) {

                    if ($senhaAntiga->senha == md5($senha_atual)) {
                        if ($nova_senha === $confirma_senha) {

                            $this->Login_model->altera_senha($cpf_usuario, $nova_senha);

                            $this->session->set_flashdata('sucesso', 'Senha atualizada com sucesso!');
                            redirect('/alterar_senha');
                        } else {
                            $this->session->set_flashdata('erro', 'Campo de confirmação de senha não confere.');
                        }
                    } else {
                        $this->session->set_flashdata('erro', 'Senha atual incorreta.');
						echo 'TESTE';
                    }
                } else {
                    $this->session->set_flashdata('erro', 'Senha atual incorreta.');
                }
            }
        }

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('alterar_senha');
    }
}
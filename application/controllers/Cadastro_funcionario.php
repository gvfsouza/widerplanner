<?php defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro_funcionario extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('cpf_usuario') == null) redirect('login'); //direciona para a página de login quando perde a sessão

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
		$this->load->model('Funcionario_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$foto_usuario = $this->converte_img($_FILES['foto_usuario']['tmp_name'], $_FILES['foto_usuario']['type']);
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
			$estado_usuario = $this->input->post('estado_usuario');
			$fk_servicos = $this->input->post('fk_servicos');
			$descricao_usuario = $this->input->post('descricao_usuario');

			// gerarSenhaAleatoria função do arquivo functions_helper
            $senha_gerada = gerarSenhaAleatoria(8);

            $senha_criptografada = md5($senha_gerada);

            $linkAcesso = 'https://widerplanner.agsete.com.br/login'; // Link para a página de login

			// FOTO - EXTENSÃO
			$path = $_FILES['nome_usuario']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$config['upload_path'] = './application/fotos';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 2048;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!isset($error)) {

				$dados['cadastro_funcionario'] = $this->Funcionario_model->cadastro_profissional($foto_usuario, $nome_usuario, $cpf_usuario, $dt_nasc_usuario, $email_usuario, $sexo_usuario, $telefone_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $estado_usuario, $fk_servicos, $descricao_usuario, $senha_criptografada);

				// Captura o ID do usuário recém-cadastrado
				$fk_usuario = $dados['cadastro_funcionario'];

				// Insere na tabela func_servicos
				foreach($fk_servicos as $values){
					$this->Funcionario_model->associar_servico($fk_usuario, $values);
				}

				$this->load->library('email');
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from('contato@agsete.com.br', 'widerplanner');
				$this->email->to($email_usuario);
				$this->email->subject('WiderPlanner - Dados de acesso ao sistema');
	
				$corpo_email['nome_usuario'] = $nome_usuario;
				$corpo_email['linkAcesso'] = $linkAcesso;
				$corpo_email['senha_gerada'] = $senha_gerada;
	
				$mensagem = 'Olá ' . $nome_usuario . ',<br><br>';
				$mensagem .= 'Para acessar o sistema, utilize o seu CPF e senha abaixo:<br><br>';
				$mensagem .= 'Sua senha de acesso ao sistema é: <strong>' . $senha_gerada . '</strong><br><br>';
				$mensagem .= '*Lembre-se de alterar sua senha após o primeiro login.<br><br>';
				$mensagem .= 'Você pode acessar o sistema através do seguinte link: <a href="' . $linkAcesso . '">Acessar o Sistema</a><br><br>';
	
				$this->email->message($mensagem);
	
				if ($this->email->send()) {
					$this->session->set_flashdata('success_email', 'Verifique sua caixa de e-mails para acessar o sistema');
				} else {
					$this->session->set_flashdata('error_email', 'Erro ao enviar e-mail');
				}
			
				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Cadastro realizado com sucesso!');
				redirect('cadastro_funcionario');
			} else {
				$this->session->set_flashdata('erro', 'Erro ao efetuar cadastro de Funcionário.');
			}
		}

		$dados['listar_servicos'] = $this->Funcionario_model->listar_servicos();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('cadastro_funcionario', $dados);
	}

	public function converte_img($img, $type)
	{
		if ($type == 'image/png') {
			$im = imagecreatefrompng($img);
			ob_start();
			imagejpeg($im);
			$data = ob_get_clean();
			imagedestroy($im);
		} else {
			ob_start();
			readfile($img);
			$data = ob_get_clean();
		}
		return base64_encode($data);
	}
}
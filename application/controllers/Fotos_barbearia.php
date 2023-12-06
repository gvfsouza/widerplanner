<?php defined('BASEPATH') or exit('No direct script access allowed');

class Fotos_barbearia extends CI_Controller
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
		$this->load->model('Fotos_barbearia_model');
		$dados = array();

		if (isset($_POST['salvar'])) {
			$fotos_lugar = $this->converte_img($_FILES['fotos_lugar']['tmp_name'], $_FILES['fotos_lugar']['type']);

			// // FOTO - EXTENSÃO
			$path = $_FILES['fotos_lugar']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 2048;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!isset($error)) {

				$dados['cadastro_fotos'] = $this->Fotos_barbearia_model->cadastro_fotos($fotos_lugar);

				//MENSAGEM SUCESSO AO CADASTRAR
				$this->session->set_flashdata('sucesso', 'Cadastro de uma nova foto realizado com sucesso!');
				redirect('fotos_barbearia');
			} else {
				$this->session->set_flashdata('erro', 'Erro ao efetuar cadastro de uma nova foto.');
			}
		}

		$dados['listar_fotos'] = $this->Fotos_barbearia_model->listar_fotos();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/navbar');
		$this->load->view('fotos_barbearia', $dados);
	}

	public function converte_img($img, $type)
	{
		$allowed_types = array('image/jpeg', 'image/png', 'image/gif');

		if (!in_array($type, $allowed_types)) {
			$this->session->set_flashdata('erro', 'Tipo de arquivo não suportado. Apenas imagens JPEG, PNG e GIF são permitidas.');
			return null;
		}

		$image = file_get_contents($img);

		if ($type == 'image/png') {
			$im = imagecreatefrompng($img);
			ob_start();
			imagejpeg($im);
			$data = ob_get_clean();
			imagedestroy($im);
		} else {
			$data = base64_encode($image);
		}

		return $data;
	}
}

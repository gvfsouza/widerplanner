<?php defined('BASEPATH') or exit('No direct script access allowed');

class Fotos_barbearia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('functions_helper');

        // Clean post data for security
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
            $config['upload_path'] = './application/fotos';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE; // This generates a unique file name

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('fotos_lugar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('erro', 'Erro ao efetuar cadastro de uma nova foto.');
            } else {
                $uploaded_info = $this->upload->data();
                $fotos_lugar = $this->converte_img($uploaded_info['full_path'], $_FILES['fotos_lugar']['type']);

                $dados['cadastro_fotos'] = $this->Fotos_barbearia_model->cadastro_fotos($uploaded_info['file_name']);

                //MENSAGEM SUCESSO AO CADASTRAR
                $this->session->set_flashdata('sucesso', 'Cadastro de uma nova foto realizado com sucesso!');
                redirect('fotos_barbearia');
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
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    // Login
    public function autenticacao_usuario($cpf_usuario, $senha)
    {
      $senha = md5($senha);

        // Realiza a autenticação do usuário, por exemplo, consulta no banco de dados
        $this->db->where('cpf_usuario', $cpf_usuario);
        $this->db->where('senha',$senha); 
        $query = $this->db->get('usuario');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }

        // return $this->db->get()->row_array();
    }

    public function salvar_dados_sessao($cpf_usuario)
    {
        $this->db->select("*");
        $this->db->from('usuario');
        $this->db->where('cpf_usuario', $cpf_usuario);

        return $this->db->get()->row_array();
    }

    //  Esqueci senha
    public function esqueci_senha($cpf_usuario, $email_usuario)
    {
        $this->db->select("*");
        $this->db->from('usuario');
        $this->db->where('cpf_usuario', $cpf_usuario);
        $this->db->where('email_usuario', $email_usuario);

        return $this->db->get()->first_row();
    }

    public function altera_senha($cpf_usuario, $senha_nova)
  {
    $senha = md5($senha_nova);

    $data = array(
      'senha' => $senha
    );

    $this->db->where('cpf_usuario', $cpf_usuario);
    $this->db->update('usuario', $data);
  }
}
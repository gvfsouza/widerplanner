<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function autenticacao_usuario($cpf_usuario, $senha)
    {
        // Realiza a autenticação do usuário, por exemplo, consulta no banco de dados
        $this->db->where('cpf_usuario', $cpf_usuario);
        $this->db->where('senha', md5($senha)); // Supondo que a senha seja armazenada como hash MD5 para simplificar
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
}

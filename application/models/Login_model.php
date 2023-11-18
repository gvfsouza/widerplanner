<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function autenticacao_usuario($cpf_usuario, $password) {
        // Realiza a autenticação do usuário, por exemplo, consulta no banco de dados
        // Substitua isso pela sua lógica real de autenticação
        $this->db->where('cpf_usuario', $cpf_usuario);
        $this->db->where('senha', md5($senha)); // Supondo que a senha seja armazenada como hash MD5 para simplificar
        $query = $this->db->get('usuario');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
}
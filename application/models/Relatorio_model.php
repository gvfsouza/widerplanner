<?php if (!defined('BASEPATH'))
    exit('No direct scripts access allowed');

class Relatorio_model extends CI_Model
{
    public function listar_usuarios_cadastrados()
    {
        $this->db->select("COUNT(usuario.id_usuario) as quant_usuarios");
        $this->db->from('usuario');
        $res = $this->db->get();
        return $res->result();
    }
}
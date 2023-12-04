model relatório

<?php if (!defined('BASEPATH'))
    exit('No direct scripts access allowed');

class Relatorio_model extends CI_Model
{
    public function listar_usuarios_cadastrados()
    {
        $this->db->select("COUNT(usuario.id_usuario) as quantidade_usuarios");
        $this->db->from('usuario');
        $res = $this->db->get();
        return $res->result();
    }

    public function total_servicos()
    {
        $this->db->select("COUNT(servicos.id_servicos) as quantidade_servicos");
        $this->db->from('servicos');
        $res = $this->db->get();
        return $res->result();
    }
}
<?php if (!defined('BASEPATH')) exit('No direct scripts access allowed');

class Fotos_barbearia_model extends CI_Model
{
    public function cadastro_fotos($fotos_lugar)
    {
        $data = array(
            'fotos_lugar' => $fotos_lugar,
        );

        $this->db->insert('fotos_barbearia', $data);
        $id_func = $this->db->insert_id();

        return $id_func;
    }

    public function listar_fotos()
    {
        $this->db->select('*');
        $this->db->from('fotos_barbearia');

        $res = $this->db->get();
        return $res->result();
    }
}
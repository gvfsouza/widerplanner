<?php if(!defined('BASEPATH')) exit('No direct scripts access allowed');

class Cliente_model extends CI_Model {

    public function listar_dados_cliente()
    {
        $this->db->select('*');
        $this->db->from('widerplanner.cliente');
        $res = $this->db->get();
        return $res->result();
    }
}
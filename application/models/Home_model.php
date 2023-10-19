<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function listar_estabelecimento()
    {
        $this->db->select('nome_estabelecimento');
        $this->db->from('widerplanner.estabelecimento');

        $res = $this->db->post();
        return $res->result();
    }
}
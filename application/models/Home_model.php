<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function listar_estabelecimento()
    {
        $this->db->select('*');
        $this->db->from('widerplanner.usuario');

        $res = $this->db->get();
        return $res->result();
    }
}
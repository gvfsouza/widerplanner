<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends CI_Model
{
    public function listar_estabelecimento($id)
    {
        $this->db->select('*');
        $this->db->from('widerplanner.estabelecimento');
        $this->db->where('id', $id);

        $res = $this->db->get();
        return $res->result();
    }
}
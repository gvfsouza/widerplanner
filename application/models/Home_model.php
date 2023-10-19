<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function listar_estabelecimento()
    {
        $this->select('*');
        $this->from('widerplanner.estabelecimento');

        $res = $this-get();
        return $res->result();
    }
}
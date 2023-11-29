<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function listar_dados_estabelecimento()
    {
        $this->db->select('*');
        $this->db->from('usuario');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_dados_produtos()
    {
        $this->db->select('*');
        $this->db->from('produtos');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_dados_servicos()
    {
        $this->db->select('*');
        $this->db->from('servicos');

        $res = $this->db->get();
        return $res->result();
    }
}
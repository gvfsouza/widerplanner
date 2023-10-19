<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function listar_estabelecimento($pagina = '', $num_ficha = '', $numero_microchip = '', $especie = '', $fk_doenca = '', $fk_status = '')
    {
        $this->db->select('*');
        $this->db->from('widerplanner.estabelecimento');
        $this->db->where('id', $id);
    }
}
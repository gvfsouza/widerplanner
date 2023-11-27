<?php if (!defined('BASEPATH')) exit('No direct scripts access allowed');

class Agendamento_model extends CI_Model
{
    public function cadastro_agenda($fk_servico, )
    {
        $data = array(
            'fk_servico' => $fk_servico,
        );

        $this->db->insert('agenda', $data);
        $id_func = $this->db->insert_id(); 

        return $id_func;
    }

    public function listar_servicos()
    {
        $this->db->select('*');
        $this->db->from('servicos');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_mes()
    {
        $this->db->select('*');
        $this->db->from('meses');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_diasemana()
    {
        $this->db->select('*');
        $this->db->from('diasemana');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_dia()
    {
        $this->db->select('*');
        $this->db->from('dia_disp');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_hora()
    {
        $this->db->select('*');
        $this->db->from('hora_disp');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_profissionais()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('prossional', 'sim');

        $res = $this->db->get();
        return $res->result();
    }
}
<?php if (!defined('BASEPATH')) exit('No direct scripts access allowed');

class Agendamento_model extends CI_Model
{
    public function cadastro_agenda($fk_servico, $fk_dia_semana)
    {
        $data = array(
            'fk_servico' => $fk_servico,
            'fk_dia_semana' => $fk_dia_semana,
        );

        $this->db->insert('agenda', $data);
        $id_func = $this->db->insert_id(); 

        return $id_func;
    }

    public function associar_servico($fk_usuario, $fk_servicos)
    {
        $data = array(
            'fk_usuario	' => $fk_usuario,
            'fk_servicos' => $fk_servicos,
        );

        $this->db->insert('agenda2', $data);
        return $this->db->insert_id();
    }

    public function listar_servicos()
    {
        $this->db->select('*');
        $this->db->from('servicos');

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
        $this->db->where('profissional', 'sim');

        $res = $this->db->get();
        return $res->result();
    }
}
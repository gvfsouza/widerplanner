<?php if (!defined('BASEPATH'))
    exit('No direct scripts access allowed');

class Agendamento_model extends CI_Model
{
    public function cadastrar_agenda($data_agenda, $fk_hora, $fk_servicos, $fk_profissional, $fk_usuario)
    {
        $data = array(
            'data_agenda' => $data_agenda,
            'fk_hora' => $fk_hora,
            'fk_profissional' => $fk_profissional,
            'fk_usuario' => $fk_usuario,
        );

        $this->db->insert('agenda', $data);
        return $this->db->insert_id();
    }

    public function associar_servico($fk_agenda, $fk_servicos)
    {
        $data = array(
            'fk_agenda' => $fk_agenda,
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

    public function listar_horaDisponivel($data_agenda, $fk_profissional)
    {
        $this->db->select('hora_disp.id_hora, hora_disp.horarios_semana');
        $this->db->from('hora_disp');
        $this->db->join('agenda', 'hora_disp.id_hora = agenda.fk_hora', 'left');
        $this->db->where('data_agenda', $data_agenda);
        $this->db->where('fk_profissional', $fk_profissional);
        $this->db->where('agenda.fk_hora IS NULL', null, false);

        $res = $this->db->get();
        return $res->result_array();
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
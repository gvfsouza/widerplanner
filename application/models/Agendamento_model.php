<?php if (!defined('BASEPATH'))
    exit('No direct scripts access allowed');

class Agendamento_model extends CI_Model
{
    public function cadastro_agenda($data_agenda, $fk_hora, $fk_servicos, $fk_profissional, $fk_usuario)
    {
        $data = array(
            'data_agenda' => $data_agenda,
            'fk_hora' => $fk_hora,
            'fk_profissional' => $fk_profissional,
            'fk_usuario' => $fk_usuario,
        );

        $this->db->insert('agenda', $data);
        $id_func = $this->db->insert_id();

        return $id_func;
    }

    public function listar_profissionais()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('profissional', 'sim');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_servicos()
    {
        $this->db->select('*');
        $this->db->from('servicos');

        $res = $this->db->get();
        return $res->result();
    }

    public function associarServico($fk_agenda, $fk_servicos)
    {
        $data = array(
            'fk_agenda' => $fk_agenda,
            'fk_servicos' => $fk_servicos,
        );

        $this->db->insert('agenda2', $data);
        return $this->db->insert_id();
    }

    public function listar_hora()
    {
        $this->db->select('*');
        $this->db->from('hora_disp');

        $res = $this->db->get();
        return $res->result();
    }

    public function horas_disponiveis()
    {
        $this->db->select('data_agenda, fk_profissional, fk_hora');
        $this->db->from('agenda');
        $this->db->where('data_agenda', $data_agenda);
        $this->db->where('fk_profissional', $fk_profissional);
        $query = $this->db->get();
        $resultado = $query->result();

        if ($resultado) {
            $this->db->select('horarios_semana');
            $this->db->from('hora_disp');
            $this->db->where_not_in('id_hora', array_column($resultado, 'fk_hora'));
            $query2 = $this->db->get();
            $horas_disponiveis = $query2->result();
            return $horas_disponiveis;
        } else {
            $this->db->select('horarios_semana');
            $this->db->from('hora_disp');
            $query3 = $this->db->get();
            $horas_disponiveis = $query3->result();
            return $horas_disponiveis;
        }
    }
}
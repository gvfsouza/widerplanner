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

    // public function listar_horaDisponivel($data_agenda, $fk_profissional)
    // {
    //     $this->db->select('data_agenda, fk_profissional, fk_hora');
    //     $this->db->from('agenda');
    //     $this->db->join('hora_disp', 'hora_disp.id_hora = agenda.fk_hora');
    //     $this->db->where('data_agenda', $data_agenda);
    //     $this->db->where('fk_profissional', $fk_profissional);

    //     $res = $this->db->get();
    //     return $res->result_array();
    // }

    public function listar_horaDisponivel($data_agenda, $fk_profissional)
    {
        $this->db->select('hora_disp.id_hora, hora_disp.horarios_semana');
        $this->db->from('hora_disp');
        $this->db->join('agenda', 'hora_disp.id_hora = agenda.fk_hora', 'left');
        $this->db->where('agenda.data_agenda', $data_agenda);
        $this->db->where('agenda.fk_profissional', $fk_profissional);
        $this->db->where('agenda.fk_hora IS NULL', null, false);

        $res = $this->db->get();
        return $res->result_array();
    }


    public function verificar_agendamento_existente($data_agenda, $fk_hora, $fk_profissional)
    {
        $this->db->where('data_agenda', $data_agenda);
        $this->db->where('fk_hora', $fk_hora);
        $this->db->where('fk_profissional', $fk_profissional);
        $query = $this->db->get('agenda');

        return $query->num_rows() > 0;
    }

    public function listar_profissionais()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('profissional', 'sim');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_agendamentos_realizados()
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->join('hora_disp', 'hora_disp.id_hora = agenda.fk_hora');
        $this->db->join('usuario', 'usuario.id_usuario = agenda.fk_usuario');
        $this->db->where('usuario.profissional !=', 'sim');

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_profissionais_agendamentos()
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->join('usuario', 'usuario.id_usuario = agenda.fk_profissional', 'left');
        $this->db->where('usuario.profissional', 'sim');
        // $this->db->where('fk_usuario', $this->session->userdata('fk_usuario')); 

        $res = $this->db->get();
        return $res->result();
    }

    public function listar_servicos_agendamentos()
    {
        $this->db->select('agenda.id_agenda, GROUP_CONCAT(servicos.nome_servico) as servicos');
        $this->db->from('agenda');
        $this->db->join('agenda2', 'agenda.id_agenda = agenda2.fk_agenda', 'left');
        $this->db->join('servicos', 'servicos.id_servicos = agenda2.fk_servicos', 'left');
        $this->db->group_by('agenda.id_agenda'); // Agrupa por id_agenda

        $res = $this->db->get();
        return $res->result();
    }
}
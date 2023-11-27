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

    public function associarServico($fk_agenda, $fk_servicos)
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

    public function listar_hora_disponivel($data_agenda, $fk_profissional)
    {
        $horarios_ocupados = $this->horariosOcupados($data_agenda, $fk_profissional);

        if (!empty($horarios_ocupados)) {
            $this->db->select('*');
            $this->db->from('hora_disp');
            $this->db->where_not_in('id_hora', $horarios_ocupados);

            $res = $this->db->get();
            return $res->result();
        } else {
            // Se não houver horários ocupados, retornar todos os horários
            $this->db->select('*');
            $this->db->from('hora_disp');

            $res = $this->db->get();
            return $res->result();
        }
    }

    public function horariosOcupados($data_agenda, $fk_profissional)
    {
        $this->db->select('fk_hora');
        $this->db->from('agenda');
        $this->db->where('data_agenda', $data_agenda);
        $this->db->where('fk_profissional', $fk_profissional);

        $res = $this->db->get();
        $result = $res->result();

        // Extrai os horários ocupados da consulta
        $horarios_ocupados = array_map(function ($item) {
            return $item->fk_hora;
        }, $result);

        return $horarios_ocupados;
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
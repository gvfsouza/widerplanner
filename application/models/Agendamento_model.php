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
    
    public function verificarHora($fk_profissional, $data_agenda, $fk_hora)
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->where('fk_profissional', $fk_profissional);
        $this->db->where('data_agenda', $data_agenda);
        $this->db->where('fk_hora', $fk_hora);
    
        $res = $this->db->get();
    
        if ($res->num_rows() > 0) {
            return false; // Já existe um cadastro para a combinação de profissional e data escolhida
        } else {
            return true; // Não existe um cadastro para a combinação de profissional e data escolhida
        }
    }
}
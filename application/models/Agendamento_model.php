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

    public function verificar_agendamento($data_agenda, $fk_profissional)
    {
        // Consulta para verificar se já existe agendamento
        $sql = "SELECT * FROM agenda WHERE data_agenda = '" + $data_agenda + "' AND fk_profissional = '" + $fk_profissional + "'";

        // Executa a consulta
        $result = $this->db->query($sql);

        // Verifica se retornou algum registro
        if ($result->num_rows > 0) {
            // Existe agendamento
            return true;
        } else {
            // Não existe agendamento
            return false;
        }
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
<?php if (!defined('BASEPATH'))
    exit('No direct scripts access allowed');

class Relatorio_model extends CI_Model
{
    // Card usuários
    public function listar_usuarios_cadastrados()
    {
        $this->db->select("COUNT(usuario.id_usuario) as quantidade_usuarios");
        $this->db->from('usuario');
        $res = $this->db->get();
        return $res->result();
    }

    // Card Serviços
    public function total_servicos()
    {
        $this->db->select("COUNT(servicos.id_servicos) as quantidade_servicos");
        $this->db->from('servicos');
        $res = $this->db->get();
        return $res->result();
    }

    // Gráfico listar agendamentos por mês
    // public function listar_agendamentos_mes()
    // {
    //     $this->db->select("COUNT(id_agenda) as quantidade, MONTH(data_agenda) as mes, YEAR(data_agenda) as ano");
    //     $this->db->from('agenda');
    //     $this->db->where("MONTH(data_agenda) >", 0);
    //     $ano_atual = date('Y'); // traz os registros do ano atual
    //     $this->db->where("YEAR(data_agenda) = ", $ano_atual);
    //     $this->db->group_by("MONTH(data_agenda)");
    //     $this->db->group_by("YEAR(data_agenda)");

    //     $res = $this->db->get();
    //     return $res->result();
    // }

    public function listar_agendamentos_mes_com_servicos()
    {
        $this->db->select("
            CASE 
                WHEN servicos.id_servicos = 1 THEN 'Cabelo'
                WHEN servicos.id_servicos = 2 THEN 'Barba'
                WHEN servicos.id_servicos = 7 THEN 'Pigmentação'
                WHEN servicos.id_servicos = 8 THEN 'Sobrancelha'
                ELSE 'Outro' -- Adicione mais casos conforme necessário
            END as nome_servico,
            COUNT(CASE WHEN servicos.id_servico IN (1, 2, 7, 8) THEN 1 ELSE NULL END) as quantidade,
            MONTH(agenda.data_agenda) as mes,
            YEAR(agenda.data_agenda) as ano
        ");
        $this->db->from('agenda');
        $this->db->join('agenda2', 'agenda.id_agenda = agenda2.fk_agenda');
        $this->db->join('servicos', 'agenda2.fk_servicos = servicos.id_servicos');
        $this->db->group_by("nome_servico, MONTH(agenda.data_agenda), YEAR(agenda.data_agenda)");
    
        $res = $this->db->get();
        return $res->result_array(); // Retorna um array associativo
    }
}
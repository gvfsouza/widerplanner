
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
    public function listar_agendamentos_mes()
    {
        $this->db->select("COUNT(id_agenda) as quantidade, DATE_PART('MONTH',data_agenda) as mes, DATE_PART('YEAR',data_agenda) as ano");
        $this->db->from('agenda');
        $this->db->where("DATE_PART('MONTH',data_agenda) >", 0);
        $ano_atual = date('Y'); // traz os registros do ano atual
        $this->db->where("DATE_PART('YEAR',data_agenda) = ", $ano_atual);
        $this->db->group_by("DATE_PART('MONTH',data_agenda)");
        $this->db->group_by("DATE_PART('YEAR',data_agenda)");

        $res = $this->db->get();
        return $res->result();
    }
}
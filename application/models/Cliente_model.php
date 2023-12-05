<?php if (!defined('BASEPATH'))
    exit('No direct scripts access allowed');

class Cliente_model extends CI_Model
{

    public function listar_dados_cliente()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $res = $this->db->get();
        return $res->result();
    }

    public function cadastro_cliente($nome_usuario, $cpf_usuario, $dt_nasc_usuario, $email_usuario, $sexo_usuario, $telefone_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $uf_usuario, $senha_criptografada)
    {
        $data = array(
            # puxa os campos do banco
            'nome_usuario' => $nome_usuario,
            'cpf_usuario' => $cpf_usuario,
            'dt_nasc_usuario' => $dt_nasc_usuario,
            'email_usuario' => $email_usuario,
            'sexo_usuario' => $sexo_usuario,
            'telefone_usuario' => $telefone_usuario,
            'cep_usuario' => $cep_usuario,
            'logradouro_usuario' => $logradouro_usuario,
            'numero_usuario' => $numero_usuario,
            'complemento_usuario' => $complemento_usuario,
            'bairro_usuario' => $bairro_usuario,
            'cidade_usuario' => $cidade_usuario,
            'estado_usuario' => $uf_usuario,
            'senha' => $senha_criptografada,
        );

        $this->db->insert('usuario', $data);
        echo $this->db->last_query();
        echo $this->db->error();

        return $this->db->insert_id();
    }

    public function dados_cliente($cpf_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('cpf_usuario', $cpf_usuario);

        $res = $this->db->get();
        return $res->result();
    }

    public function historico_agendamentos_realizados()
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->join('hora_disp', 'hora_disp.id_hora = agenda.fk_hora', 'left');
        $this->db->join('usuario', 'usuario.id_usuario = agenda.fk_usuario', 'left');
        $this->db->where('usuario.profissional !=', 'sim');
        $this->db->where('fk_usuario', $this->session->userdata('fk_usuario'));


        $res = $this->db->get();
        return $res->result();
    }

    public function historico_profissionais_agendamentos()
    {
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->join('usuario', 'usuario.id_usuario = agenda.fk_profissional', 'left');
        $this->db->where('usuario.profissional', 'sim');

        $res = $this->db->get();
        return $res->result();
    }

    public function historico_servicos_agendamentos()
    {
        $this->db->select('agenda.id_agenda, GROUP_CONCAT(servicos.nome_servico) as servicos');
        $this->db->from('agenda');
        $this->db->join('agenda2', 'agenda.id_agenda = agenda2.fk_agenda', 'left');
        $this->db->join('servicos', 'servicos.id_servicos = agenda2.fk_servicos', 'left');
        $this->db->group_by('agenda.id_agenda'); // Agrupa por id_agenda
        $this->db->where('fk_usuario', $this->session->userdata('fk_usuario')); 

        $res = $this->db->get();
        return $res->result();
    }

    public function editar_dados_pesoais($id_usuario, $telefone_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $uf_usuario)
    {
        $data = array(
            'telefone_usuario' => $telefone_usuario,
            'cep_usuario' => $cep_usuario,
            'logradouro_usuario' => $logradouro_usuario,
            'numero_usuario' => $numero_usuario,
            'complemento_usuario' => $complemento_usuario,
            'bairro_usuario' => $bairro_usuario,
            'cidade_usuario' => $cidade_usuario,
            'estado_usuario' => $uf_usuario,
        );

        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuario', $data);
    }

}
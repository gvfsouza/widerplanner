<?php if (!defined('BASEPATH')) exit('No direct scripts access allowed');

class Funcionario_model extends CI_Model
{

    public function listar_dados_cliente()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $res = $this->db->get();
        return $res->result();
    }

    public function cadastro_profissional($foto_usuario, $nome_usuario, $cpf_usuario, $dt_nasc_usuario, $email_usuario, $sexo_usuario, $telefone_usuario, $cep_usuario, $logradouro_usuario, $numero_usuario, $complemento_usuario, $bairro_usuario, $cidade_usuario, $estado_usuario, $senha_criptografada)
    {
        $data = array(
            # puxa os campos do banco
            'foto_usuario' => $foto_usuario,
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
            'estado_usuario' => $estado_usuario,
            'senha' => $senha_criptografada,
            'profissional' => 'sim',
            'profissao' => 'barbeiro',
        );

        $this->db->insert('usuario', $data);
        return $this->db->insert_id();
    }

    public function FuncionarioServico($id_usuario, $id_servicos)
    {
        $data = array(
            'fk_usuario' => $id_usuario,
            'fk_servico' => $id_servicos,
        );

        $this->db->insert('func_servicos', $data);
    }

    public function listar_servicos()
    {
        $this->db->select('*');
        $this->db->from('servicos');

        $res = $this->db->get();
        return $res->result();
    }
}
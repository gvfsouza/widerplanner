<?php if(!defined('BASEPATH')) exit('No direct scripts access allowed');

class Cliente_model extends CI_Model {

    public function listar_dados_cliente()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $res = $this->db->get();
        return $res->result();
    }

    public function cadastro_cliente($nome_usuario,$cpf_usuario,$dt_nasc_usuario,$email_usuario,$sexo_usuario,$telefone_usuario,$cep_usuario,$logradouro_usuario,$numero_usuario,$complemento_usuario,$bairro_usuario,$cidade_usuario,$uf_usuario,$senha_criptografada)
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

        $this->db->insert('usuario',$data);
        echo $this->db->last_query();
        echo $this->db->error();

        return $this->db->insert_id();
    }
}
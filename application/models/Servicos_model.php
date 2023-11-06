<?php if(!defined('BASEPATH')) exit('No direct scripts access allowed');

class Servicos_model extends CI_Model {

    public function listar_servicos()
    {
        $this->db->select('*');
        $this->db->from('servicos');

        $res = $this->db->get();
        return $res->result();
    }

    public function cadastro_servicos($foto_servico, $nome_servico, $descricao_servico, $valor_servico, $duracao_servico)
    {
        $data = array(
            # puxa os campos do banco
            'foto_servico' => $foto_servico,
            'nome_servico' => utf8_decode($nome_servico),
            'descricao_servico' => utf8_decode($descricao_servico),
            'valor_servico' => $valor_servico,
            'duracao_servico' => $duracao_servico,
        );


        $this->db->insert('servicos', $data);
        return $this->db->insert_id();
    }
}
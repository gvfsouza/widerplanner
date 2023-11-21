<?php if(!defined('BASEPATH')) exit('No direct scripts access allowed');

class Produto_model extends CI_Model {

    public function listar_produto()
    {
        $this->db->select('*');
        $this->db->from('produtos');

        $res = $this->db->get();
        return $res->result();
    }

    public function cadastro_produto($foto_produto, $nome_produto, $valor_produto, $qtde_produto, $descricao_produto)
    {
        $data = array(
            # puxa os campos do banco
            // 'foto_produto' => $foto_produto,
            'nome_produto' => $nome_produto,
            'descricao_produto' => $descricao_produto,
            'valor_produto' => $valor_produto,
            'qtde_produto' => $qtde_produto,
        );

        $this->db->insert('produtos', $data);
        return $this->db->insert_id();
    }
}
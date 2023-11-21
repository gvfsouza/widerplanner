<?php if (!defined('BASEPATH'))
    exit('No direct scripts access allowed');

class Produto_model extends CI_Model
{

    public function listar_produtos()
    {
        $this->db->select('*');
        $this->db->from('produtos');

        $res = $this->db->get();
        return $res->result();
    }

    public function cadastro_produto($foto_produto, $nome_produto, $descricao_produto, $valor_produto, $qtde_produto)
    {
        // Adicione uma verificação para garantir que 'foto_produto' não seja nulo
        if ($foto_produto !== null) {
            $data = array(
                'foto_produto' => $foto_produto,
                'nome_produto' => $nome_produto,
                'descricao_produto' => $descricao_produto,
                'valor_produto' => $valor_produto,
                'qtde_produto' => $qtde_produto,
            );

            $this->db->insert('produtos', $data);
            return $this->db->insert_id();
            
        } else {
            // Trate o caso em que 'foto_produto' é nulo
            return false;
        }
    }
}
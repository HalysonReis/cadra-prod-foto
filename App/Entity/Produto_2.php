<?php

require_once( '../App/DB/Database.php');

class Produto{

    public int $id_prod;
    public string $nome;
    public string $descricao;
    public string $email;
    public string $tipo;
    public string $preco;
    public string $promo;
 
    public function cadastrar(){
        //instancia o banco 
        $db = new Database('produto_2');
        //chama a funcao insert do banco e passa o ARRAY como parametro
        $res = $db->insert(
                [
                    'nome'=> $this->nome,
                    'descricao' => $this->descricao,
                    'email' => $this->email,
                    'tipo' => $this->tipo,
                    'preco' => $this->preco,
                    'promo' => $this->promo
                ]
            );

        return $res;
    }

    public function buscar($where = null,$order = null,$limit = null){
        //instancia o banco 
        $db = new Database('produto_2');

        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }

    public function buscar_por_id($id){
        //instancia o banco 
        $db = new Database('produto_2');
        $where = 'id_prod ='.$id;
        $res = $db->select($where)->fetchObject(self::class);
        return $res;
    }

    public function atualizar(){
        $db = new Database('produto_2');
        $res = $db->update('id_prod ='.$this->id_prod,
            [
                "nome" => $this->nome,
                "email" => $this->descricao,
            ]
        );
        return $res;
    }

    public function excluir(){
        //instancia o banco 
        $db = new Database('produto_2');
        $where = 'id_prod ='.$this->id_prod;
        $res = $db->delete($where);
        return $res;
    }
}
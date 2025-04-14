<?php

require_once( '../App/DB/Database.php');

class Produto{

    public int $id_prod;
    public string $nome;
    public string $descricao;
    public string $foto;
 
    public function cadastrar(){
        //instancia o banco 
        $db = new Database('produto');
        //chama a funcao insert do banco e passa o ARRAY como parametro
        $res = $db->insert(
                [
                    'nome'=> $this->nome,
                    'descricao' => $this->descricao,
                    'foto' => $this->foto
                ]
            );

        return $res;
    }

    public function buscar($where = null,$order = null,$limit = null){
        //instancia o banco 
        $db = new Database('produto');

        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }

    public function buscar_por_id($id){
        //instancia o banco 
        $db = new Database('produto');
        $where = 'id_prod ='.$id;
        $res = $db->select($where)->fetchObject(self::class);
        return $res;
    }

    public function atualizar(){
        $db = new Database('produto');
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
        $db = new Database('produto');
        $where = 'id_prod ='.$this->id_prod;
        $res = $db->delete($where);
        return $res;
    }
}
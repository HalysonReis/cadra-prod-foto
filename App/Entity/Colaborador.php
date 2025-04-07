<?php

require './App/DB/Database.php';

class Colaborador{

    public int $id_colab;
    public string $nome;
    public string $email;
    public string $fone;
    public string $foto;
 
    public function cadastrar(){
        //instancia o banco 
        $db = new Database('colaborador');
        //chama a funcao insert do banco e passa o ARRAY como parametro
        $res = $db->insert(
                [
                    'nome'=> $this->nome,
                    'email'=> $this->email,
                    'fone' => $this->fone,
                    // 'foto' => $this->foto
                ]
            );

        return $res;
    }

    public function buscar($where = null,$order = null,$limit = null){
        //instancia o banco 
        $db = new Database('colaborador');

        $res = $db->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
        return $res;
    }

    public function buscar_por_id($id){
        //instancia o banco 
        $db = new Database('colaborador');
        $where = 'id_colab ='.$id;
        $res = $db->select($where)->fetchObject(self::class);
        return $res;
    }

    public function atualizar(){
        $db = new Database('colaborador');
        $res = $db->update('id_colab ='.$this->id_colab,
            [
                "nome" => $this->nome,
                "email" => $this->email,
                "fone" => $this->fone
            ]
        );
        return $res;
    }

    public function excluir(){
        //instancia o banco 
        $db = new Database('colaborador');
        $where = 'id_colab ='.$this->id_colab;
        $res = $db->delete($where);
        return $res;
    }
}
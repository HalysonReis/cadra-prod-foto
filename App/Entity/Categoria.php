<?php

require '../DB/Database.php';

class Categoria{

    public int $id;
    public string $descricao;
    public string $cor;
    public string $icone;

    public function cadastrar(){
        //instancia o banco 
        $db = new Database('categoria');
        //chama a funcao insert do banco e passa o ARRAY como parametro
        $db->insert(
                [
                    'descricao'=> $this->descricao,
                    'cor'=> $this->cor,
                    'icone' => $this->icone,
                ]
            );

        return true;
    }


}


$categoria = new Categoria();
$categoria->descricao = "YAN TORRES";
$categoria->cor = "torres@gmail.com";
$categoria->icone = "67999999";

echo '<pre>';
print_r($categoria);
echo '</pre>';

$result = $categoria->cadastrar();

echo '<br>';
echo $result;


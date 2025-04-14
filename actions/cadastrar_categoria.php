<?php
require_once('../App/Entity/Produto.php');
//require './App/DB/Database.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $icone = $_POST['icone'];

    
    $objCat = new Produto();
    $objCat->nome = $nome;
    $objCat->descricao = $descricao;
    $objCat->foto = $icone;
    // $objCat->foto = $caminho;

    $res = $objCat->cadastrar();
    if($res){
        $response = array('status' => 200);
        echo json_encode($response);
    }else{
        $response = array('status' => 'error');
        echo json_encode($response);
    }
}

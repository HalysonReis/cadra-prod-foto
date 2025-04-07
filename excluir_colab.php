<?php
require './App/Entity/Colaborador.php';
//require './App/DB/Database.php';

if(isset($_GET['id_colab'])){

    $id = $_GET['id_colab'];
    $obj = new Colaborador();

    $colab = $obj->buscar_por_id($id);
    
    //print_r($colab);
    $result = $colab->excluir();
    if($result){
        header('location: ./listar.php');
    }else{
        echo '<script> alert("ERRRROOOOO") </script>';
    }

}


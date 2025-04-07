<?php
require './App/Entity/Colaborador.php';
//require './App/DB/Database.php';

if(isset($_GET['id_colab'])){

    $id = $_GET['id_colab'];
    $obj = new Colaborador();
    $colab = $obj->buscar_por_id($id);
}


if(isset($_POST['editar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    
    $colab->nome = $nome;
    $colab->email = $email;
    $colab->fone = $fone;

    //print_r($objColab);
    $res = $colab->atualizar();
    if($res){
        echo '<script> alert("Cadastrado com sucesso!") </script>';
    }else{
        echo '<script> alert("Error!") </script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar de Colaboradores</h1>
    <form method="POST">
        <input type="text" id="nome" name="nome" value="<?=$colab->nome;?>" >
        <br>
        <input type="text" id="email" name="email" value="<?=$colab->email;?>" >
        <br>
        <input type="text" id="fone" name="fone" value="<?=$colab->fone;?>" >
        <br>

        <input type="file" id="foto" name="foto">
        <br>
        

        <input type="submit" name="editar" value="Cadastrar">
    </form>
</body>
</html>
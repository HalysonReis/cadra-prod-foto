<?php
require './App/Entity/Produto.php';

if (isset($_POST['enviado'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $arquivo = $_FILES['foto'];
    if($arquivo['error']) die('falhar ao enviar o arquivo');
    $pasta = './uploads/fotos/';
    $nome_foto = $arquivo['name'];
    $novo_nome = uniqid();
    $extencao = strtolower(pathinfo($nome_foto, PATHINFO_EXTENSION));

    if ($extencao != 'png' && $extencao != 'jpg') die('nao foi possivel carregar a foto');
    $caminho = $pasta . $novo_nome . '.'. $extencao;
    $foto = move_uploaded_file($arquivo['tmp_name'], $caminho);

    $prod = new Produto();
    $prod->nome = $nome;
    $prod->descricao = $descricao;
    $prod->foto = $caminho;

    $res = $prod->cadastrar();
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
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 30%;

        }
        div {
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>
    
    <h1>cadastrar produto</h1>
    <form method="post" enctype='multipart/form-data'>
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label>Descrição:</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        <label>Foto:</label>
        <input type="file" name="foto" id="foto" required>
        <div class="">
            <button type="submit" name="enviado">Cadastrar</button>
            <button type="reset">Cancelar</button>
        </div>
    </form>
</body>
</html>
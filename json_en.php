<?php

require_once('./App/Entity/Colaborador.php');
// require "./Colaborador.php";

$colab = new Colaborador();

$dados = $colab->buscar_json();


echo json_encode($dados);

?>
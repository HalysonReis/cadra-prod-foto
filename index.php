<?php
//include './actions/cadastrar_categoria.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .conteiner {
            display: flex;
            gap: 20px;
            padding: 20px 0px;
        }

        .form_categoria{
            padding: 20px;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .modal-confirma {
            position: absolute;
            z-index: 3;
            background-color: red;
        }

        #minhadiv {
            background-color: red;
        }

        #form_modal {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .oculta {
            visibility: hidden;
        }

        .chama{
            visibility: visible;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <a href="cada-prod.php">Cadastrar produto</a>
    <div id="minhadiv">
        <h1 id="titulo">Cadastro de Colaboradores</h1>
    </div>

    <div class="conteiner">
        <div id="ibge">
            <button id="buscar" class="btn_buscar">Buscar dados</button>
        </div>
        <div id="ibge">
            <button id="categoria" class="btn_cadastrar">Cadastrar categoria</button>
        </div>
    </div>

    <form id="formulario" method="POST" enctype='multipart/form-data' >

        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
        <br>
        <span id="text"></span>
        <br>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu cpf">
        <br>
        <input type="text" id="email" name="email" placeholder="Digite seu email">
        <br>
        <input type="text" id="fone" name="fone" placeholder="Digite seu fone">
        <br>
        <input type="text" id="cidade" name="cidade" placeholder="Digite seu cidade">
        <br>
        
        <!-- <input type="file" id="foto" name="foto"> -->
        <br>
        
        
        <input type="reset" name="cancelar" id="cancelar" value="cancelar">
        <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
    </form>

    <table id="table">

    </table>

    <dialog open id="modal" class="oculta">
        <form method="dialog" id="form_modal">
            <section>
                <p>Cadastrado com sucesso!!</p>
            </section>
            <section>
                <button type="submit">OK</button>
            </section>
        </form>
    </dialog>

    <?php include './modal_categoia.html'; ?>


    <!-- <script src="./js/script.js"></script> -->
    <!-- <script src="./js/script2.js"></script> -->
    <!-- <script src="./js/script3.js"></script> -->
    <script src="./js/jsonBD.js"></script>
    <script src="./js/cadastro-modal.js"></script>
</body>
</html>
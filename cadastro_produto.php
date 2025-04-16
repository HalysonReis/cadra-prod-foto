
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

    <div class="conteiner">
        <div id="ibge">
            <button id="categoria" class="btn_cadastrar">Cadastrar produto</button>
        </div>
    </div>

    <form id="formulario" method="POST" enctype='multipart/form-data' >

        <span id="erros"></span>
        <br>

        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
        <br>
        <input type="text" id="descricao" name="descricao" placeholder="Digite seu descricao">
        <br>
        <input type="text" id="email" name="email" placeholder="Digite seu email">
        <br>
        <input type="text" id="tipo" name="tipo" placeholder="Digite seu tipo">
        <br>
        <input type="text" id="preco" name="preco" placeholder="Digite seu preco">
        <br>
        <input type="text" id="promo" name="promo" placeholder="Digite seu promo">
        <br>
        
        <br>
        
        
        <input type="reset" name="cancelar" id="cancelar" value="cancelar">
        <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
    </form>


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


    <script src="./js/cadastro_produto.js"></script>
</body>
</html>
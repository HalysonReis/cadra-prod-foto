

let nome = document.getElementById('nome');
let cpf = document.getElementById('cpf');
let email = document.getElementById('email');
let fone = document.getElementById('fone');
let cidade = document.getElementById('cidade');

var btn_cancelar = document.getElementById('cancelar')
var btn_cadastrar = document.getElementById('cadastrar')

btn_cadastrar.addEventListener('click', function(e){
    e.preventDefault()

    let nome = formulario.nome.value;
    let cpf = formulario.cpf.value;
    let email = formulario.email.value;
    let fone = formulario.fone.value;
    let cidade = formulario.cidade.value;

    if (nome = ""){
        alert('preencha o nome');
    }
    else if (cpf.length < 11){
        alert('cpf incompleto');
    }
    else if(email = ""){
        alert('preencha o email');
    }
    else if(fone.length < 11){
        alert('preencha o fone');
    }
    else if(cidade = ""){
        alert('preencha o cidade');
    }

    e.submitEvent()

})

// usado no mercado

// const formulario = document.getElementById('formulario')

// formulario.addEventListener('submit', function(e){
//     e.preventDefault()

//     let nome = formulario.nome.value;
//     let cpf = formulario.cpf.value;
//     let email = formulario.email.value;
//     let fone = formulario.fone.value;
//     let cidade = formulario.cidade.value;

//     if (nome = ""){
//         alert('preencha o nome');
//     }
//     else if (cpf.length < 11){
//         alert('cpf incompleto');
//     }
//     else if(email = ""){
//         alert('preencha o email');
//     }
//     else if(fone.length < 11){
//         alert('preencha o fone');
//     }
//     else if(cidade = ""){
//         alert('preencha o cidade');
//     }else {
//         return true;
//     }


// })
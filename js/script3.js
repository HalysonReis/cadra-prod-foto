

let nome = document.getElementById('nome');
let cpf = document.getElementById('cpf');
let email = document.getElementById('email');
let fone = document.getElementById('fone');
let cidade = document.getElementById('cidade');

var btn_cancelar = document.getElementById('cancelar')
var btn_cadastrar = document.getElementById('cadastrar')

btn_cadastrar.addEventListener('click', function(e){
    e.preventDefault()
    alert('Clicou no cadstrar')
})

var formulario = document.getElementById('formulario')


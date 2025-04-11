let bot = document.getElementById('buscar')
let modal = document.getElementById('modal')
let form = document.getElementById('formulario')
let btn_cadastrar = form.cadastrar
let nome = form.nome;
let cpf = form.cpf.value;
let email = form.email.value;
let fone = form.fone.value;
let cidade = form.cidade.value;
let text = document.getElementById('text')



nome.addEventListener('keypress', (event) => {
    text.innerText = nome.value
})

function chamaModal(){
    modal.classList.remove('oculta')
    modal.classList.add('chama')
}

btn_cadastrar.addEventListener('click', (event) => {
    event.preventDefault()

    let nome = form.nome.value;
    let cpf = form.cpf.value;
    let email = form.email.value;
    let fone = form.fone.value;
    let cidade = form.cidade.value;

    console.log(nome);
    console.log(cpf);
    console.log(email);
    console.log(cidade);

    chamaModal()
})

let titulo = document.querySelector('#titulo')
console.log(titulo)
titulo.textContent = 'titulo'

async function getData(){
    const response = await fetch("https://servicodados.ibge.gov.br/api/v1/localidades/distritos")
    const dados = await response.json()

    console.log(dados)
    console.log(dados.length)

    for(var i = 0; i<dados.length; i++){
        document.write('<br>')
        document.write(dados[i].nome)
    }
}

bot.addEventListener('click', getData)
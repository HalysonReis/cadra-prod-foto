let titulo = document.getElementById('titulo')

titulo.style.fontWeight = '400'
titulo.addEventListener('click', function(){
    titulo.style.color = 'blue';
    titulo.style.fontWeight = '900'
})
titulo.addEventListener('dblclick', function(){
    titulo.style.color = 'pink';
    titulo.style.fontWeight = '900'
})

let formulario = document.getElementById('formulario')

// console.log(formulario)

// console.log(formulario.cpf)

// console.log(formulario.cadastrar)

formulario.cadastrar.addEventListener('click', function(event){
    event.preventDefault();
    
    let nome = formulario.nome.value;
    let cpf = formulario.cpf.value;
    let email = formulario.email.value;
    let fone = formulario.fone.value;
    let cidade = formulario.cidade.value;

    console.log(nome)
    console.log(cpf)
    console.log(email)
    console.log(fone)
    console.log(cidade)

    if (nome == ""){
        alert("preencha o nome")
    }
    if (cpf == ""){
        alert("preencha o cpf")
    }
    else if (11 > cpf.length){
        alert("cpf incompleto")
    }
    if (email == ""){
        alert("preencha o email")
    }
    if (fone == ""){
        alert("preencha o fone")
    }
    if (cidade == ""){
        alert("preencha o cidade")
    }
})
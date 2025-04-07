var x = 10;
var y = 20;
var res = x+y;

// tipos de print 
// alert(res);
// e 
// document.write(res);
// e 
// console.log(res);

var titulo = document.getElementById('titulo');

// console.log(titulo);

var btn_cancel = document.getElementById('cancelar')

// console.log(btn_cancel)


// btn_cansel.addEventListener('click', alerta)

btn_cancel.addEventListener("click", function(){
    console.log('Cliked!!!!')
})

// var lista = ['limao', 'maça', 'pera', 'banana']
// console.log(lista[2])

// for (var i = 0; i < lista.length; i++){
//     console.log(lista[i])
// }

var pessoa = {

}

// console.log(typeof(pessoa))

pessoa.nome = 'halyson'
pessoa.email = 'halysondosreissilva@gmail.com'
pessoa.idade = 19

// console.log(pessoa)


var empresas = [{
    "nome": "SPLIT AIR",
    "cidade": 'Campo Grande',
    "estado": "MS"
},
{
    "nome": "joao",
    "cidade": 'Campo Grande',
    "estado": "MS"
},
{
    "nome": "marcos",
    "cidade": 'Campo Grande',
    "estado": "MS"
},
{
    "nome": "antonio",
    "cidade": 'Campo Grande',
    "estado": "MS"
}]

for (var i = 0; i < empresas.length; i++){
    console.log(empresas[i].nome, empresas[i].cidade)
}

// console.log(empresa.estado)

var minhadiv = document.getElementById('minhadiv')
console.log(minhadiv)

minhadiv.addEventListener('mouseover', function(){
    minhadiv.style.backgroundColor = 'blue';
    minhadiv.style.width = "50%";
})
minhadiv.addEventListener('mouseout', function(){
    minhadiv.style.backgroundColor = 'red';
})
minhadiv.addEventListener('dblclick', function(){
    minhadiv.style.width = '100%';
})


var cpf = document.getElementById('cpf')

cpf.addEventListener('keypress', function() {
    console.log(cpf.value)
})
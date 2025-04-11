let buscar = document.getElementById('buscar')

buscar.addEventListener('click', async function (){
    let dados_php = await fetch('./test.php');
    let response = await dados_php.json()

    console.log(response);

    console.log(response.status)

    if(response.status == 200){
        alert('foi')
    }
    else{
        alert('nao foi')
    }
})
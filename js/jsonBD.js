let buscar = document.getElementById('buscar')
let table = document.getElementById('table')

buscar.addEventListener('click', async function (){
    let dados_php = await fetch('./json_en.php');
    let response = await dados_php.json()

    let content = '';

    for(var i = 0; i < response.length; i++){
        content += `<tr>
        <td>`+ response[i].id_colab + `</td>
        <td>` + response[i].nome + `</td>
        <td>` + response[i].fone + `</td>
        <td>` + response[i].email +`</td>
        </tr>`;
    }

    table.innerHTML = content

})
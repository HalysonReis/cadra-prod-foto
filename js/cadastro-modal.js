let btn_categoria = document.querySelector("#categoria")
let modal = document.getElementById('form_categoria')

function chamaModal(m){
    m.classList.remove('oculta')
    m.classList.add('chama')
}

function fechaModal(m){
    m.classList.remove('chama')
    m.classList.add('oculta')
}

btn_categoria.addEventListener('click', function () {
    chamaModal(modal);

    modal.cadastrar_categoria.addEventListener('click', async function (event){


        event.preventDefault()

        let formulario = document.getElementById('form_categoria');
        const form_data = new FormData(formulario);

        
        let dados_php = await fetch('./actions/cadastrar_categoria.php',{method:"POST",
        body:form_data}
        );

        let response = await dados_php.json();

        console.log(response);

        if (response['status'] == 200){
            const modal_confirma = document.getElementById('modal-confirma')

            const ok = document.getElementById('ok')

            fechaModal(modal)
            
            chamaModal(modal_confirma)
            ok.addEventListener('click', function (){

                fechaModal(modal_confirma)
            })
        }

    })
    
    
})
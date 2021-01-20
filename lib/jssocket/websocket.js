 var form = document.getElementById('formCadastraChamado');
 var botao = document.getElementById('solicitar');
 
botao.addEventListener('click',function (e, params) {
        var localParams = params || {};

        if (!localParams.send) {
            e.preventDefault();
        }

           //additional input validations can be done hear

    Swal.fire({
                title: "Confirmar Solicitação",
                text: "Deseja enviar esta solicitação?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#6A9944",
                confirmButtonText: "Confirmar",
                cancelButtonText: "Cancelar",
            }
            
            
            ).then((result) => {
                if(result.isConfirm){ 
                form.submit();
            } 
    });
});

<script type="text/javascript">
const conn = new WebSocket('wss://lad566ws.herokuapp.com/wss');

conn.onopen = function(e) {
    console.log("Connection established!");
    setInterval(ping, 53000);
    

};

function ping() {
var obj = 'a';
conn.send(obj);
}
<?php if($id_setor == 1):?>
conn.onmessage = function(e) {
    if(e.data != 'a'){
    notificar(e.data);
    atualizar();
    $("formCadastroChamado").off();
    }


};
<?php endif;?>

var form = document.getElementById('formCadastraChamado');
var btn = document.getElementById('solicitar');
var nome = document.getElementById('nome_envio');
var body = document.getElementById('body-not');
var msg = null;

form.addEventListener('submit',function (e, params) {
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
                
        if(result.value){ 
            
            form.submit();
        	if(msg == null){
		        var nome_s = nome.value
		        msg =nome_s +" abriu uma nova solicitação";
  		        conn.send(msg);
	                       }
                                    } 
    });
});

function notificar(msg){
 var msgg = msg;
Swal.fire({
  type: 'info',
  title: 'Novo chamado',
  text: msgg ,
  footer: '<a href="../views/listaChamado.php">Veja todas as solicitações abertas</a>'
});
};
/*
function atualizar(){
  $( "#testando" ).load("pesquisa.php");
  $("#not").load("not.php");
};*/

function atualizar(){
  $.post( "pesquisa.php", function( data ) {
  $( "#testando" ).html( data );
  $("#not").load("not.php");
  $("#not1").load("not.php");
  
});



}

//console.log(msg);
//showMessage(chamado){

//}
</script>
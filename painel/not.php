<?php
require_once '../models/DAO/bd_chamado.php';

$bd_chamdo_ws = new bd_chamado();
$chamado_ws = $bd_chamdo_ws->listachamadosabertos1();
$Clientes ='Chamados Pendentes ('.count($chamado_ws).')';
echo $Clientes;
?>
<?php
session_start();
if(isset($_SESSION['userlogado'])){
	$matricula = $_SESSION['matriculauser'];
}else{
	$matricula = null;
}

require_once '../../models/DAO/bd_patrimonio.php';
require_once '../../models/patrimonio.php';

$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$pat = new patrimonio();
$bdpat = new bd_patrimonio();

$pat->setIdPatrimonio($params['id_patrimonio']);
$pat->setDescricao($params['descricao']);
$pat->setMarca($params['marca']);
$pat->setUnidade($params['unidade']);
$idantes = $params['idantigo'];
$resultado = $bdpat->alteraPatrimonio($pat,$idantes);


if($resultado == true){
	$resultado = "Patrimonio Alterado";
}else{
	$resultado = "Erro na Alteração";
}
header("Location: ../../painel/index.php?mensagem={$resultado}");

<?php
session_start();
require_once '../../models/chamado.php';
require_once '../../models/DAO/bd_chamado.php';

$params = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(isset($params['descricao']) && $params['descricao'] != ''){

$chamado = new chamado();
$bd_chamado = new bd_chamado();

$chamado->setFkUsu($params['matricula']);
$chamado->setFkSetor($params['id_setor']);
$chamado->setTipoChamado($params['tipo_chamado']);
$chamado->setDescricao($params['descricao']);
$chamado->setUnidade($params['unidade']);

$resultado = $bd_chamado->cadastrachamado($chamado);
}else{
	$resultado = false;
}

if($resultado == true){
	$resultado = "Solicitação enviada";
	$_SESSION['cor'] = 3;
	header("Location: ../../painel/index.php?mensagem={$resultado}");
	die();
}else{
	$_SESSION['cor'] = 2; 
	$resultado = "Preencha todos os campos da solicitação";
	header("Location: ../../painel/index.php?mensagem={$resultado}");
	die();
}

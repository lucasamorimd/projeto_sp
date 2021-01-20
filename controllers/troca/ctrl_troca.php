<?php
require_once '../../models/DAO/bd_troca.php';
require_once '../../models/troca.php';

$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$troca = new troca();

$bdtroca = new bd_troca();

$troca->setMatricula($params['matricula']);
$troca->setIdSetorAtual($params['idsatual']);
$troca->setIdSetorDestino($params['idsdestino']);
$troca->setIdPatrimonio($params['idpat']);

$resultado = $bdtroca->cadastraTroca($troca);
/*echo "<pre>";
var_dump($resultado);
die();
echo "</pre>";*/


if($resultado == true){
	bd_troca::alteraPatrimonio($params['idpat'],$params['idsdestino']);
	$resultado = "Realocação realizada com sucesso";
}else{
	$resultado = "Erro ao realizar troca";
}
header("Location: ../../painel/index.php?mensagem={$resultado}");


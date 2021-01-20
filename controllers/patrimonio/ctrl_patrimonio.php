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
$pat->setIdSetor($params['id_setor']);
$pat->setMatricula($matricula);
$pat->setDescricao($params['descricao']);
$pat->setMarca($params['marca']);
$pat->setUnidade($params['unidade']);

$resultado = $bdpat->cadastraPatrimonio($pat);

if($resultado == true){
	$resultado = "Patrimonio Cadastrado";
}else{
	$resultado = "Erro no cadastro";
}
header("Location: ../../painel/index.php?mensagem={$resultado}");

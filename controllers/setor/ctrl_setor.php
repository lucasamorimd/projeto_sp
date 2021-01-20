<?php
session_start();
if($_SESSION['userlogado'] == 1 && $_SESSION['perfiluser'] == 1){
	$nome = $_SESSION['nomeuser'];
	$email = $_SESSION['emailuser'];
	$matricula = $_SESSION['matriculauser'];
	$perfil = $_SESSION['perfiluser'];
	$id_setor = $_SESSION['setoruser'];
}else{

	$resultado = "Perfil sem Autorização";
	header("Location: ../../painel/index.php?mensagem={$resultado}");
	die();
}
require_once '../../models/DAO/bd_setor.php';
require_once '../../models/setor.php';

$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$setor = new setor();
$setorbd = new bd_setor();

$setor->setNomeSetor($params['setor']);
$setor->setCoordenador($params['coordenador']);

$resultado = $setorbd->cadastraSetor($setor);

if($resultado == true){
	$resultado = "Setor cadastrado";

}else{
	$resultado = "Erro no Cadastro";
}
header("Location: ../../painel/index.php?mensagem={$resultado}");
die();
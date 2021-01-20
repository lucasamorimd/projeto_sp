<?php


require_once '../models/DAO/bd_usuario.php';

if($_SESSION['userlogado'] == 1){
	$nome = $_SESSION['nomeuser'];
	$email = $_SESSION['emailuser'];
	$matricula = $_SESSION['matriculauser'];
	$perfil = $_SESSION['perfiluser'];
	$id_setor = $_SESSION['setoruser'];
	$foto = $_SESSION['fotouser'];
}else{
	$nome = null;
	$email = null;
	$matricula = null;
	$id_setor = null;
	$resultado = "Algo inesperado ocorreu, tente novamente!";
	header("Location: ../painel/index.php?mensagem={$resultado}");
}

$bdusu = new bd_usuario();

$usuperf = $bdusu->perfilUser($matricula);
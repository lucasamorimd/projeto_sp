<?php

session_start();
if($_SESSION['userlogado'] == 1 && $_SESSION['perfiluser'] == 1){
	$nome = $_SESSION['nomeuser'];
	$email = $_SESSION['emailuser'];
	$matricula = $_SESSION['matriculauser'];
	$perfil = $_SESSION['perfiluser'];
	$id_setor = $_SESSION['setoruser'];
}else{

	$resultado = "Perfil sem Autorização!!";
	header("Location: ../painel/index.php?mensagem={$resultado}");
	die();
}
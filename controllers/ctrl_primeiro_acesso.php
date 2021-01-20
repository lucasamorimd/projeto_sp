<?php
session_start();
if(isset($_SESSION['userlogado'])){
	$matricula = $_SESSION['matriculauser'];
}else{
	$matricula = null;
}

require_once '../models/DAO/bd_primeiro_acesso.php';

$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$bdusu = new bd_primeiro_acesso();


$resultado = $bdusu->primeiroacesso($params['senha'],$matricula);

//var_dump($_SESSION);
//die('here');

if($resultado == true){
	$resultado = "Senha Redefinida";
}else{
	$resultado = "Algo deu errado, tente novamente";
}
header("Location: ../painel/index.php?mensagem={$resultado}");




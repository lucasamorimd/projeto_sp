<?php

require_once '../models/DAO/bd_login.php';

$loginDAO = new bd_login();
$logoutDAO = new bd_login();

//var_dump($_POST); die;


$token = md5(session_id());
if(isset($_GET['token']) && $_GET['token'] === $token) {
   // limpe tudo que for necessário na saída.
   // Eu geralmente não destruo a seção, mas invalido os dados da mesma
   // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
  $resultado = "Logout Feito!";
   session_destroy();
   header("Location:../index.php?mensagem={$resultado}");
   exit();
} else {

    $email = addslashes($_POST["matricula"]);
    $senha = addslashes($_POST["senha"]);
    $senha = md5($senha);
}

$usuario = $loginDAO->login($email,$senha);


if (!isset($usuario)) {
  	
    $resultado = 'ERRO NO LOGIN!!!';
    Header("Location: ../index.php?mensagem={$resultado}");
    die();

} else {
    
    if($_SESSION['pri_login'] == 1){
    $resultado = 'SEJA BEM VINDO ';
    $_SESSION['cor'] = 3;
	Header("Location: ../painel/index.php?mensagem={$resultado}");
	die();
    }else{
        $resultado = 'Primeiro acesso, Redefina sua senha!';
        $_SESSION['cor'] = 5;
    	header("Location: ../redef.php?mensagem={$resultado}");
    	die();
    }


}
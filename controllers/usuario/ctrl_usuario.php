<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php
require_once '../../models/usuario.php';
require_once '../../models/DAO/bd_usuario.php';

$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$user = new usuario();
$bduser = new bd_usuario();

$user->setMatricula($params['matricula']);
$user->setNome($params['nome']);
$user->setEmail($params['email']);
$user->setIdSetor($params['id_setor']);
$user->setPerfil($params['perfil']);



$resultado = $bduser->cadastraUsuario($user);



if($resultado == true){
	$resultado = "Usuário cadastrado!";
}else{
	$resultado = "Erro ao cadastrar usuário!!";
}
header("Location: ../../painel/index.php?mensagem={$resultado}");
die();


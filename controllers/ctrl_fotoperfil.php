<?php
session_start();
require_once '../models/DAO/bd_usuario.php';
require_once '../vendor/setdeSessao.php';


$bd_foto = new bd_usuario();
$foto = $_FILES['fotoperfil'];


/*
if(isset($foto['tmp_name']) && empty($foto['tmp_name']) == false){
    $nomearquivo = md5(time()).'.jpg';
    move_uploaded_file($foto['tmp_name'], '../assets/img/faces/'.$nomearquivo);
    
    
    $resultado = $bd_foto->upfoto($nomearquivo,$matricula);
}*/


if(!empty($_FILES)){ // Se o array $_FILES não estiver vazio
// Incluímos o arquivo com a classe
include '../models/upload.php';
// Associamos a classe à variável $upload
$upload = new upload();
// Determinamos nossa largura máxima permitida para a imagem
$upload->width = 250;
// Determinamos nossa altura máxima permitida para a imagem
$upload->height = 250;



// Exibimos a mensagem com sucesso ou erro retornada pela função salvar.
//Se for sucesso, a mensagem também é um link para a imagem enviada.
$resultado = $upload->salvar("../assets/img/faces/", $_FILES['fotoperfil'],$matricula);

if(is_array($resultado)){
    $msg = $resultado['msg'];
    $nome = $resultado['nome'];
    $_SESSION['cor'] = 3;
    $bd_foto->upfoto($nome,$matricula);

}else{
    $msg = $resultado;
    $_SESSION['cor'] = 2;

}
header("location:../painel/index.php?mensagem={$msg}");
die();
}






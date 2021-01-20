<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once '../../models/DAO/bd_chamado.php';
require_once '../../models/chamado.php';

$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$fecha = new chamado();
$fechabd = new bd_chamado();

$fecha->setMatriculaTecnico($params['matricula']);
$fecha->setSolucao($params['solucao']);
$fecha->setNomeTecnico($params['nome_tecnico']);
$fecha->setIdChamado($params['num_chamado']);

$resultado = $fechabd->fechachamado($fecha);

if($resultado == true){
    $resultado = "Chamado encerrado com sucesso";
}else{
    $resultado = "Erro ao fechar o chamado";
}
header("Location:../../painel/index.php?mensagem={$resultado}");
die();
<?php
require_once 'setdeSessao.php';
require_once '../models/DAO/bd_setor.php';
require_once '../models/DAO/bd_patrimonio.php';
require_once '../models/DAO/bd_troca.php';
require_once '../models/DAO/bd_chamado.php';

$dir1 = basename($_SERVER['PHP_SELF']);
//FUNÇÕES DE CHAMADO ------------- CHAMADOS

$bd_chamado = new bd_chamado();
$listaChamado = new bd_chamado();
$chamFun = $bd_chamado->listachamadosabertosF($matricula);
$echamados = $listaChamado->listachamadoEncerrado($matricula);
$achamados = $listaChamado->listachamadosabertos();
$aachamados = $listaChamado->listachamadosabertos1();
$pagChamados = $listaChamado->listachamadoPagi($id_setor,$matricula);
$chamadosPagId1 = $pagChamados['pagesid'];
$chamadosPagMat1 = $pagChamados['pagesmat'];
$chamadosPag = $pagChamados['pages'];
$chamadoP_a = $pagChamados['pageatual'];
$Cproxima = $chamadoP_a+1;
$Canterior = $chamadoP_a-1;

//FIM DAS FUNÇÕES DE CHAMADO ------------ FIM CHAMADO

//FUÇÕES DE SETOR ----------- SETOR

$bdsetor = new bd_setor();
$setor =$bdsetor->listaSetor();
$setorFun = $bdsetor->listaSetorId($id_setor);

//FIM DAS FUNÇÕES DE SETOR ------------ FIM SETOR

//FUÇÕES DE PATRIMÔNIO ---------------- PATRIMÔNIO
$bdpat = new bd_patrimonio;

$patrim = $bdpat->listaPatrimonioPagination($id_setor);

$p_a = $patrim['pageatual'];
$proxima = $p_a + 1;
$anterior = $p_a - 1;
if($id_setor == 1){

$patri = $bdpat->listaPatrimonioNTI();
$patriList = $patri;
$paginas = $patrim['pages']; //função para paginação

}else{
	$patri = $bdpat->listaPatrimonio($id_setor);
	$paginas = $patrim['pagesid']; //função para paginação
}

$patriOrd = $bdpat->listaPatrimonioOrd($id_setor);
//FIM PATRIMÔNIO ----------------- PATRIMÔNIO

//FUNÇOES DE TROCA ----------------- TROCAS

$bdtroca = new bd_troca();
$troca = $bdtroca->listaTroca();
$bdlistatroca = new bd_troca();
$trocadet = $bdlistatroca->listaTrocaDetalhe();
$trocadetatu = $bdlistatroca->listaTrocaDetalheAtu();
$PagiTroc = $bdtroca->trocasPagination();
$t_p_a = $PagiTroc['pageatual'];
$tpaginas = $PagiTroc['pages'];



//FIM TROCAS --------------- FIM TROCAS
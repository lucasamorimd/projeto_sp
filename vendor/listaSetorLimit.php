<?php 

require_once '../models/DAO/bd_setor.php';
require_once '../models/DAO/bd_troca.php';
$bdsetor = new bd_setor();
$setorL =$bdsetor->listaSetorLimit();


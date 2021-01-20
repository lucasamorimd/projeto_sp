<?php
require_once '../models/DAO/bd_chamado.php';

$bd_chamdo_ws = new bd_chamado();
$chamado_ws = $bd_chamdo_ws->listachamadosabertosws();
/*echo "<pre>";
print_r($chamado_ws);
echo "</pre>";
die();*/

$Clientes = '';
foreach ($chamado_ws as $cws) {
	$Clientes = '
	<td>'.$cws->id_chamado.'</td>
	<td>'.$cws->nome_setor.'</td>
	<td>'.$cws->nome.'</td>
	<td>'.$cws->unidade.'</td>
	<td class="td-actions">
	      <a href="../views/detalhachamado.php?detchamado='.base64_encode($cws->id_chamado).'">
	        
	      <button type="button" rel="tooltip" title="Detalhar" class="btn btn-primary btn-link btn-sm">
	        <i class="material-icons">library_books</i>
	      </button>
	      </a>
	</td>
	';
}
echo $Clientes ;
?>
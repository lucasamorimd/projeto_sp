<table class="table">
                        <thead class=" text-primary">
                          <th>
                            Patrimônio
                          </th>
                          <th>
                            Funcionário
                          </th>
                          <th>
                            Setor Atual
                          </th>
                          <th>
                          	Data de Alocação
                          </th>
                          <th>
                          	Detalhar
                          </th>
                        </thead>
                        <tbody>
                        	<?php 


                        	foreach ($trocadet as $tr) {?>
                        		
                          <tr>
                            <td>
                              <?php echo $tr->id_patrimonio;?>
                            </td>                            
                            <td>
                              <?php echo $tr->nome;?>
                            </td>
                            <td>
                              <?php echo $tr->nome_setor;?>
                            </td>
                            <td>
                            	<?php echo date("d/m/Y", strtotime($tr->data_troca));?>
                            </td>
                            <td class="">
                              <a href="../views/detalhatroca.php?dettroca=<?php echo base64_encode($tr->id_troca);?>">
                                
                              <button type="button" rel="tooltip" title="Detalhar" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">library_books</i>
                              </button>
                              </a>
                              </td>
                          </tr>
                        	<?php }?>


                        </tbody>
                      </table>

<?php if($t_p_a >= 2 && $t_p_a < $tpaginas ): ?>
<ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="listaTrocas.php?p=1>">Início</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="listaTrocas.php?p=<?=$anterior?>">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link"><?php echo $t_p_a."/".$tpaginas;?></a></li>
    <li class="page-item">
      <a class="page-link" href="listaTrocas.php?p=<?=$proxima?>">Próxima</a>
    </li>
</ul>

  <?php elseif($t_p_a == 1 && $tpaginas > 1): ?>
<ul class="pagination justify-content-end">
    <li class="page-item"><a class="page-link"><?php echo $t_p_a."/".$tpaginas;?></a></li>
    <li class="page-item">
    <li class="page-item">
      <a class="page-link" href="listaTrocas.php?p=<?=$proxima?>">Próxima</a>
    </li>
</ul>
    <?php elseif($t_p_a>1 && $t_p_a == $tpaginas): ?>
<ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="listaTrocas.php?p=1">Início</a>
    </li>
    
    <li class="page-item">
      <a class="page-link" href="listaTrocas.php?p=<?=$anterior?>">Anterior</a>
    </li>
        <li class="page-item"><a class="page-link"><?php echo $t_p_a."/".$tpaginas;?></a></li>
    <li class="page-item">
    <li class="page-item disabled">
      <a class="page-link" href="javascript:;" tabindex="-1">Próxima</a>
    </li>
</ul>

<?php endif;?>
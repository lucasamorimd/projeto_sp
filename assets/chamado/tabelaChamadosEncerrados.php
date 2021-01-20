                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                            Numero do Chamado
                          </th>
                          <th>
                            Tipo de Chamado
                          </th>
                          <th>
                            Unidade
                          </th>
                          <th>
                          	Situação
                          </th>
                          <th>
                          	Detalhar
                          </th>
                        </thead>
                        <tbody>
                        	<?php 


                        	foreach ($echamados as $tr) {?>
                        	  
                        	<tr>
                        	  <td>
                        	    <?php echo $tr->id_chamado;?>
                        	  </td>                            
                        	  <td>
                        	    <?php echo $tr->tipo_chamado;?>
                        	  </td>
                        	  <td>
                        	    <?php echo $tr->unidade;?>
                        	  </td>
                        	  <td>
                        	    <?php if($tr->resolvido != 1){echo "Aguardando";}else{echo "Atendido";};?>
                        	  </td>
                        	  <td class="">
                        	    <a href="../views/detalhachamado.php?detchamado=<?php echo base64_encode($tr->id_chamado);?>">
                        	      
                        	    <button type="button" rel="tooltip" title="Detalhar" class="btn btn-primary btn-link btn-sm">
                        	      <i class="material-icons">library_books</i>
                        	    </button>
                        	    </a>
                        	    </td>
                        	</tr>
                        	<?php }?>


                        </tbody>
                      </table>
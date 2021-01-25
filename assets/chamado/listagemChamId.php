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
                        Nome do Solicitante
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


                      foreach ($chamado as $trp) {?>
                        
                        <tr>
                          <td>
                            <?php echo $trp->id_chamado;?>
                          </td>                            
                          <td>
                            <?php echo $trp->tipo_chamado;?>
                          </td>
                          <td>
                            <?php echo $trp->nome;?>
                          </td>
                          <td>
                            <?php echo $trp->unidade;?>
                          </td>
                          <td>
                            <?php if($trp->resolvido == 0):?>
                              
                              <a href='#' rel='tooltip' title="Aguardando atendimento!!!">Aguardando</a>
                              
                              <?php elseif($trp->resolvido == 1 ):?>
                                
                                Atendido
                                
                                <?php else:?>
                                  
                                  <a href='#' rel='tooltip' title='Por <?=$trp->nome_tecnico;?>'>Em atendimento</a>
                                <?php endif;?>
                              </td>
                              <td>
                                <a href="../views/detalhachamado.php?detchamado=<?php echo base64_encode($trp->id_chamado);?>">
                                  <button type="button" rel="tooltip" title="Detalhar" class="btn btn-primary btn-link btn-sm">
                                    <i class="material-icons">library_books</i>
                                  </button>
                                </a>
                              </td>
                            </tr>
                          <?php }?>


                        </tbody>
                      </table>
                    </div>
                    
                    <?php $chamadosPag = $chamadosPagMat1;?>
                    <?php if($chamadoP_a >= 2 && $chamadoP_a < $chamadosPag ): ?>
                      <ul class="pagination justify-content-end">
                        <li class="page-item">
                          <a class="page-link" href="listaMeusChamados.php?p=1>">Início</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="listaMeusChamados.php?p=<?=$anterior?>">Anterior</a>
                        </li>
                        <li class="page-item"><a class="page-link"><?php echo $chamadoP_a."/".$chamadosPag;?></a></li>
                        <li class="page-item">
                          <a class="page-link" href="listaMeusChamados.php?p=<?=$proxima?>">Próxima</a>
                        </li>
                      </ul>

                      <?php elseif($chamadoP_a == 1 && $chamadosPag > 1): ?>
                        <ul class="pagination justify-content-end">
                          <li class="page-item"><a class="page-link"><?php echo $chamadoP_a."/".$chamadosPag;?></a></li>
                          <li class="page-item">
                            <li class="page-item">
                              <a class="page-link" href="listaMeusChamados.php?p=<?=$proxima?>">Próxima</a>
                            </li>
                          </ul>
                          <?php elseif($chamadoP_a>1 && $chamadoP_a == $chamadosPag): ?>
                            <ul class="pagination justify-content-end">
                              <li class="page-item">
                                <a class="page-link" href="listaMeusChamados.php?p=1">Início</a>
                              </li>
                              
                              <li class="page-item">
                                <a class="page-link" href="listaMeusChamados.php?p=<?=$anterior?>">Anterior</a>
                              </li>
                              <li class="page-item"><a class="page-link"><?php echo $chamadoP_a."/".$chamadosPag;?></a></li>
                              <li class="page-item">
                                <li class="page-item disabled">
                                  <a class="page-link" href="javascript:;" tabindex="-1">Próxima</a>
                                </li>
                              </ul>

                              <?php endif;?>   

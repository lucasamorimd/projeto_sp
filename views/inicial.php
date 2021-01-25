          <div class="row fade-in-bck">
            <div class="col-lg-3 col-md-6 col-sm-6">
                
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <a href="../views/listaPatrimonio.php">
                  <div class="card-icon">
                    <i class="material-icons" style="color:#fff;">content_copy</i>
                  </div>
                  </a>
                  <p class="card-category">Patrimônios</p>
                  <h3 class="card-title"><?php echo count($patri);?>
                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    
                    Total geral de patrimônios no setor
                  </div>
                  </div>
                </div>
             
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <a href="../views/listaSetor.php">
                  <div class="card-icon">
                    <i class="material-icons" style="color:#fff;">store</i>
                  </div>
                  </a>
                  <p class="card-category">Setores</p>
                  <h3 class="card-title"><?php echo count($setor);?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    Total de setores cadastrados.
                  </div>
                  </div>
                </div>
              
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <a href="../views/listaTrocas.php">
                  <div class="card-icon">
                    <i class="material-icons" style="color:#fff;">compare_arrows</i>
                  </div>
                  </a>
                  <p class="card-category">Realocações</p>
                  <h3 class="card-title"><?php echo count($troca);?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Total de realocações realizadas.
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <?php if($id_setor == 1){?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <a href="../views/chamadosEncerrados.php">
                  <div class="card-icon">
                    <i class="material-icons" style="color:#fff;">build</i>
                  </div>
                  </a>
                  <p class="card-category">Chamados</p>
                  <h3 class="card-title"><?php echo count($echamados)?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Total de chamados encerrados.
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
<!--          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Email Subscriptions</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Completed Tasks</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>-->
          <div class="row fade-in-bck">
            <div class="col-lg-6 col-md-12">
                <div class="">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">content_copy</i> Patrimônio
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab" >
                            <i class="material-icons">store</i> Setores
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">compare_arrows</i>Realocações
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <div class="">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>Patrimônio</td>
                            <td>Descrição</td>
                            <td>Setor</td>
                           
                          </tr>
                          <?php foreach ($patriOrd as $k) {?>
                          <tr>

                            <td><?php echo $k->id_patrimonio;?></td>
                            <td><?php echo $k->descricao;?></td>
                            <td><?php echo $k->nome_setor;?></td>
                            
                              <?php if($perfil == 1):?>
                              <td class="td-actions">
                              <a href="../views/cadastraPatrimonio.php?patrimonio=<?php echo base64_encode($k->id_patrimonio);?>">
                                
                              <button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              </a>
                              
                              <a href="../views/cadastraTroca.php?patrimonio=<?php echo base64_encode($k->id_patrimonio);?>">
                              <button type="button" rel="tooltip" title="Realizar troca" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">compare_arrows</i>
                              </button></a>
                              </td>
                              <?php else: ?>
                              <td class="td-actions">
                                <a href="../views/cadastraPatrimonio.php">
                                  
                                <button type="button" rel="tooltip" title="Cadastrar Novo Patrimônio" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">add_circle_outline</i>
                                </button>
                                </a>
                                </td>
                              <?php endif;?>
                            
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    </div>
                    <div class="tab-pane" id="messages">
                        <div class="">
                      <table class="table">
                        <tbody>
                            <?php if($id_setor == 1): ?>
                          <form action="../controllers/setor/ctrl_setor.php" method="post">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Nome do Setor</label>
                                  <input type="text" class="form-control" name="setor">
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Nome do Coordenador(a)</label>
                                  <input type="text" class="form-control" name="coordenador">
                                </div>
                              </div>

                            <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
                            <div class="clearfix"></div>
                          </form>
                          <?php else:?>
                          <tr>
                              <td>Setor</td>
                              <td>Gestor</td>
                          </tr>
                          <?php foreach($setorL as $s){?>
                              <tr>
                                  <td><?php echo $s->nome_setor;?></td>
                                  <td><?php echo $s->coordenador;?></td>
                              </tr>
                          <?php } ?>
                          <?php endif;?>
                        </tbody>
                      </table>
                    </div>
                    </div>
                    <div class="tab-pane" id="settings">
                        <div class="">
                      <table class="table">
                        <tbody>
                          <tr>
                           
                            <td>Patrimônio</td>
                            <td>Setor Atual</td>
                            <td>Descrição</td>
                            <td>&nbsp</td>
                           
                          </tr>
                            <?php foreach ($trocadet as $t) {?>
                          <tr>

                            <td>
                              <?php echo $t->id_patrimonio;?>
                            </td>
                            <td>
                              <?php echo $t->nome_setor;?>
                            </td>
                            <td>
                              <?php echo $t->descricao;?>
                            </td>

                            <td class="td-actions">
                              <a href="../views/detalhatroca.php?dettroca=<?php echo base64_encode($t->id_troca);?>">
                                
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php if($id_setor == 1):?>
            <div class="col-lg-6 col-md-12" id="webteste">
             <div class="">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 id="not1"class="card-title">Chamados Pendentes (<?php echo count($aachamados)?>)</h4>
                  <p class="card-category">Solicitações para serem atendidas.</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Nº</th>
                      <th>Setor</th>
                      <th>Solicitante</th>
                      <th>Unidade</th>
                      <th>Detalhar</th>
                      
                    </thead>
                    <tbody >
                      <tr bgcolor="#64b5f6" id="testando">
                        
                      </tr>
                       <?php foreach ($achamados as $k) {?>
                         
                       <tr>
                         <td><?php echo $k->id_chamado;?></td>
                         <td><?php echo $k->nome_setor;?></td>
                         <td><?php echo $k->nome;?></td>
                         <td><?php echo $k->unidade;?></td>
                         <td class="td-actions">
                               <a href="../views/detalhachamado.php?detchamado=<?php echo base64_encode($k->id_chamado);?>">
                                 
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
                </div>
              </div>
            </div>
            <?php else:?>
            <div class="col-lg-6 col-md-12">
                <div class="tilt-in-fwd-tr">
              <div class="card" id="att">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Solicitações</h4>
                  <p class="card-category">Chamados feitos por você em espera por atendimento.</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Nº do Chamado</th>
                      <th>Tipo de chamado</th>
                      <th>Detalhar</th>
                      
                    </thead>
                    <tbody>
                      <?php foreach ($chamFun as $key) {?>
                        
                      <tr>
                        <td><?php echo $key->id_chamado;?></td>
                        <td><?php echo $key->tipo_chamado;?></td>
                        <td class="td-actions">
                              <a href="../views/detalhachamado.php?detchamado=<?php echo base64_encode($key->id_chamado);?>">
                                
                              <button type="button" rel="tooltip" title="Detalhar" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">library_books</i>
                              </button>
                              </a>
                        </td>
                
                      </tr>
                      <tr>
                     <?php }?>
                        
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
            <?php endif;?>
          </div>
        </div>
      </div>

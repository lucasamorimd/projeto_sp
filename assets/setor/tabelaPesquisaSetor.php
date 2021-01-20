<div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <th>
                              ID
                            </th>
                            <th>
                              Setor
                            </th>
                            <th>
                              Coordenador
                            </th>
                            
                          </thead>
                          <tbody>
                            <?php foreach ($pesqNome as $ky) {?>
                              
                            <tr>
                              <td>
                                <?php echo $ky->id_setor;?>
                              </td>                            
                              <td>
                                <?php echo $ky->nome_setor;?>
                              </td>
                              <td>
                                <?php echo $ky->coordenador;?>
                              </td>

                            </tr>
                            <?php }?>


                          </tbody>
                        </table>
                      </div>
          <form action="../controllers/chamado/ctrl_chamado.php" method="post" id="formCadastraChamado">
            <input type="text" id="nome_envio" value="<?php echo $nome;?>" hidden>
            <div class="row">
              

              
              <div class="col-md-5">
                <div class="form-group">
                  
                  <select class="custom-select" name="tipo_chamado" >
                    
                    <option selected value="">Onde é o problema?</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Mouse">Mouse</option>
                    <option value="Teclado">Teclado</option>
                    <option value="Telefone">Telefone</option>
                    <option value="Cabeamento">Cabeamento</option>
                    <option value="Erros no Sistema">Erros no Sistema</option>
                    <option value="Lentidão do Sistema">Lentidão do Sistema</option>
                    <option value="Travamentos">Travamentos</option>
                    <option value="Impressora">Impressora</option>
                    <option value="Internet">Internet</option>
                    <option value="Outros">Outros...</option>
                  </select>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Matricula</label>
                  <input type="text" class="form-control" readonly name="matricula"  value="<?php echo $matricula; ?>">
                </div>
              </div>
              
            </div>
            
            <label>Descrição</label>
            <div class="form-group">
              <label class="bmd-label-floating"> Diga aqui de forma mais detalhada o seu problema.</label>
              <textarea class="form-control" rows="5" name="descricao" required=""></textarea>
            </div>
            
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Unidade</label>
                  <select class="custom-select" name="unidade" required="">
                    
                    <option selected value="">De qual unidade você é?</option>
                    <option value="Águas Claras">Águas Claras</option>
                    <option value="Asa Sul">Asa Sul</option>

                  </select>
                </div>
              </div>
              <?php if ($id_setor == 1):?> <!-- VERIFICA SE É DO NTI -->
              
              
              
              <div class="col-md-6">
                <div class="form-group">
                  
                  <label class="bmd-label-floating">Setor</label>
                  <select class="custom-select" name="id_setor" required>
                    <option selected value="">Selecione o Setor</option>
                    <?php

                    foreach ($setor as $key) {
                          # code...
                      
                      ?>
                      <option value="<?php echo $key->id_setor; ?>"><?php echo $key->nome_setor; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              
              <?php else:?> <!-- SE NÃO FOR DO NTI SÓ PODE CADASTRAR COM O SEU PRÓPRIO SETOR -->
              
              
              <div class="col-md-6">
                <div class="form-group">
                  
                  <?php

                  foreach ($setorFun as $key) {
                          # code...
                    
                    ?>
                    <label class="bmd-label-floating">Setor</label>
                    <select class="custom-select" name="id_setor" onlyread>
                      <option selected value="<?php echo $key->id_setor; ?>"><?php echo $key->nome_setor;?></option>
                      
                    <?php } ?>
                  </select>
                </div>
              </div>
              
            <?php endif;?>
          </div>
          
          
          <?php if($id_setor == 1):?>
            <button type="submit" class="btn btn-primary" id="solicitar">Solicitar</button>
            <?php else:?>
              <button type="submit" class="btn btn-primary" id="solicitar">Solicitar</button>
            <?php endif;?>
            <div class="clearfix">
              
            </div>
          </form>

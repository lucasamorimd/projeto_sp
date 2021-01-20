           <form action="../controllers/patrimonio/ctrl_patrimonio.php?>" method="post">
            <div class="row">
              
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">N° Patrimônio(a)</label>
                      <input type="text" class="form-control" name="id_patrimonio" required >
                    </div>
                  </div>
            
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="bmd-label-floating">Matricula</label>
                      <input type="text" class="form-control" name="matricula" disabled="" value="<?php echo $matricula; ?>">
                    </div>
                  </div>
            
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Descrição</label>
                  <input type="text" class="form-control" name="descricao"  required>
                </div>
              </div>

            <div class="col-md-4">
              <div class="form-group">
                <label class="bmd-label-floating">Marca</label>
                <input type="text" class="form-control" name="marca" >
              </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">

            <label class="bmd-label-floating">Unidade</label>
                <select class="custom-select" name="unidade" required>
                  <option selected value="">Selecione a Unidade</option>
                  <option value="Asa Sul">Asa Sul</option>
                  <option value="Águas Claras">Águas Claras</option>
                </select>
              </div>
            </div>
            <?php if ($id_setor == 1):?> <!-- VERIFICA SE É DO NTI -->
            
            <div class="row">
              
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
            </div>
            <?php else:?> <!-- SE NÃO FOR DO NTI SÓ PODE CADASTRAR COM O SEU PRÓPRIO SETOR -->
            <div class="row">
              
                   <div class="col-md-6">
                    <div class="form-group">
                      
                      <?php

                      foreach ($setorFun as $key) {
                        # code...
                      
                      ?>
                  <label class="bmd-label-floating">Setor</label>
                  <select class="custom-select" name="id_setor">
                      <option selected value="<?php echo $key->id_setor; ?>"><?php echo $key->nome_setor;?></option>
                      
                      <?php } ?>
                  </select>
                    </div>
                   </div>
                   </div>
           
          <?php endif;?>
              
              <button type="submit" class="btn btn-primary">Cadastrar</button>
              <div class="clearfix">
                
              </div>
          </form>
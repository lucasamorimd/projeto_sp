<form action="../controllers/patrimonio/ctrl_alt_patrimonio.php" method="post">
  <div class="row">
    
    <div class="col-md-5">
      <div class="form-group">
        <label class="bmd-label-floating">N° Patrimônio(a)</label>
        <input type="text" class="form-control" name="id_patrimonio" value="<?php echo $p->id_patrimonio;?>">
      </div>
    </div>
    
    <div class="col-md-5">
      <div class="form-group">
        <label class="bmd-label-floating">Matricula</label>
        <input type="text" class="form-control" name="matricula" disabled="" value="<?php echo $p->fk_pat_matricula; ?>">
      </div>
    </div>
    
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label class="bmd-label-floating">Descrição</label>
        <input type="text" class="form-control" name="descricao" value="<?php echo $p->descricao;?>">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label class="bmd-label-floating">Marca</label>
        <input type="text" class="form-control" name="marca" value="<?php echo $p->marca;?>">
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label class="bmd-label-floating">Unidade</label>
      <select class="custom-select" name="unidade">
        <option selected value=""><?=$p->unidade?> (Atual) </option>
        <option value="Asa Sul">Asa Sul</option>
        <option value="Águas Claras">Águas Claras</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    
   <div class="col-md-6">
    <div class="form-group">
      
      <label class="bmd-label-floating">Setor</label>
      <select class="custom-select" name="id_setor" disabled="">
        <option selected value=""><?php echo $p->nome_setor;?></option>

      </select>
      <input type="" name="idantigo" value="<?php echo $idPat;?>" hidden="">
    </div>
  </div>
</div>





<button type="submit" class="btn btn-primary">Alterar</button>


<div class="clearfix">
  
</div>

</form>

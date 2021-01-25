<form action="../controllers/chamado/ctrl_fecha_chamado.php" method="post" >
  <div class="row">
    
    <div class="col-md-2">
      <div class="form-group">
        <label class="bmd-label-floating">Número do Chamado</label>
        <input type="text" class="form-control" name="num_chamado" value="<?php echo $params['num_chamado'];?>" readonly>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label class="bmd-label-floating">Nome do Solicitante</label>
        <input type="text" class="form-control"  value="<?php echo $params['nome_solicitante'];?>" readonly>
      </div>
    </div>
    
    <div class="col-md-3">
      <div class="form-group">
        <label class="bmd-label-floating">Matricula do Solicitante</label>
        <input type="text" class="form-control"   readonly value="<?php echo $params['matricula_solicitante']; ?>" readonly>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label class="bmd-label-floating">Unidade</label>
        <input type="text" class="form-control"  value="<?php echo $params['unidade'];?>" readonly>
      </div>
    </div>
    
  </div>
  <div class="row">
   <div class="col-md-6">
    <div class="form-group">
      
      <label class="bmd-label-floating">Setor</label>
      <select class="custom-select" value="<?php echo $params['nome_setor'];?>" readonly>
        <option>
         <?php echo $params['nome_setor'];?>
       </option>
       

     </select>
     
   </div>
 </div>
 <div class="col-md-6">
  <div class="form-group">
    
    <label class="bmd-label-floating">Tipo de chamado</label>
    <select class="custom-select" value="<?php echo $params['tipo_chamado'];?>" readonly>
      <option>
       <?php echo $params['tipo_chamado'];?>
     </option>
     

   </select>
   
 </div>
</div>
</div>
<div class="form-group">
  <label class="bmd-label-floating"> Descrição dada sobre o problema.</label>
  <textarea class="form-control" rows="5"  readonly=""><?php echo $params['descricao']; ?></textarea>
</div>


<div class="row">

 <div class="col-md-3">
   <div class="form-group">
     <label class="bmd-label-floating">Data de Abertura</label>
     <input type="text" class="form-control" name="data_abertura" value="<?php echo date("d/m/Y", strtotime($params['data_abertura']));?>" readonly>
   </div>
 </div>

 <div class="col-md-4">
   <div class="form-group">
     <label class="bmd-label-floating">Nome do Técnico</label>
     <input type="text" class="form-control" name="nome_tecnico" value="<?php echo $nome;?>" readonly>
   </div>
 </div>
 
 <div class="col-md-4">
   <div class="form-group">
     <label class="bmd-label-floating">Matrícula do Técnico</label>
     <input type="text" class="form-control" name="matricula" value="<?php echo $matricula;?>" readonly>
   </div>
 </div>
</div>


<div class="form-group">
  <label class="bmd-label-floating">Qual foi a solução para o problema?.</label>
  <textarea class="form-control" rows="5" name="solucao" ></textarea>
</div>


<?php if($id_setor == 1 && $params['resolvido'] != 1):?>
 <button type="submit" class="btn btn-primary">Finalizar</button>
 <div class="clearfix"></div>
<?php endif;?>

</form>

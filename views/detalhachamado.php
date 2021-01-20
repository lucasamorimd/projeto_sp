<?php
session_start();
require '../vendor/setdeSessao.php';
require '../vendor/listaSetor.php';
if(isset($_GET['detchamado'])){
  $idchamado = base64_decode($_GET['detchamado']);
  $chamadodet = $bd_chamado->selecionaidchamado($idchamado);

}else{
  $idchamado = null;
}
?>
<!doctype html>
<html>

<head>
  <title>Patrimônios - Detalhamento de Chamado</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
  <style type="text/css">
  	select[readonly] {
  	  background: #eee; /*Simular campo inativo - Sugestão @GabrielRodrigues*/
  	  pointer-events: none;
  	  touch-action: none;
  	}
  	.custom-select {
  	  position: relative;
  	  font-family: Arial;
  	}

  	.custom-select select {
  	  display: none; /*hide original SELECT element: */
  	}

  	.select-selected {
  	  background-color: DodgerBlue;
  	}

  	/* Style the arrow inside the select element: */
  	.select-selected:after {
  	  position: absolute;
  	  content: "";
  	  top: 14px;
  	  right: 10px;
  	  width: 0;
  	  height: 0;
  	  border: 6px solid transparent;
  	  border-color: #fff transparent transparent transparent;
  	}

  	/* Point the arrow upwards when the select box is open (active): */
  	.select-selected.select-arrow-active:after {
  	  border-color: transparent transparent #fff transparent;
  	  top: 7px;
  	}

  	/* style the items (options), including the selected item: */
  	.select-items div,.select-selected {
  	  color: #ffffff;
  	  padding: 8px 16px;
  	  border: 1px solid transparent;
  	  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  	  cursor: pointer;
  	}

  	/* Style items (options): */
  	.select-items {
  	  position: absolute;
  	  background-color: DodgerBlue;
  	  top: 100%;
  	  left: 0;
  	  right: 0;
  	  z-index: 99;
  	}

  	/* Hide the items when the select box is closed: */
  	.select-hide {
  	  display: none;
  	}

  	.select-items div:hover, .same-as-selected {
  	  background-color: rgba(0, 0, 0, 0.1);
  	}

  </style>
</head>

<body>
  
  	<?php include '../assets/navbar.php'; ?>

        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            
            <div class="row">
              <div class="col-md-12"> 
              
                <div class="card">
                    <div class="tilt-in-right-1">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Detalhamento do Chamado</h4>
                    <p class="card-category">Todas as informações sobre o chamado.</p>
                  </div>
                  </div>
                  <div class="puff-in-center">
                  <div class="card-body">
                   <?php 
                    foreach ($chamadodet as $p) {
                      # code...
                    
                    ?>

            <form action="atendeChamado.php" method="POST" >
            	<div class="row">
            		
            	      <div class="col-md-2">
            	        <div class="form-group">
            	          <label class="bmd-label-floating">Número do Chamado</label>
            	          <input type="text" class="form-control" name="num_chamado" value="<?php echo $p->id_chamado;?>" readonly>
            	        </div>
            	      </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nome do Solicitante</label>
                        <input type="text" class="form-control" name="nome_solicitante"  value="<?php echo $p->nome;?>" readonly>
                      </div>
                    </div>
            	
            	      <div class="col-md-3">
            	        <div class="form-group">
            	          <label class="bmd-label-floating">Matricula do Solicitante</label>
            	          <input type="text" class="form-control" name="matricula_solicitante"  readonly value="<?php echo $p->fk_usu; ?>" readonly>
            	        </div>
            	      </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Unidade</label>
                        <input type="text" class="form-control" name="unidade" value="<?php echo $p->unidade;?>" readonly>
                      </div>
                    </div>
            	
            	</div>
            	            	<div class="row">

            		       <div class="col-md-3">
            		         <div class="form-group">
            		           <label class="bmd-label-floating">Data de Abertura</label>
            		           <input type="text" class="form-control" name="data_abertura" value="<?php echo date("d/m/Y", strtotime($p->data_abertura));?>" readonly>
            		         </div>
            		       </div>
            		       <div class="col-md-3">
            		         <div class="form-group">
            		           <label class="bmd-label-floating">Horário da Abertura</label>
            		           <input type="text" class="form-control" name="hora_abertura" value="<?php echo date("H:i", strtotime($p->data_abertura));?>" readonly>
            		         </div>
            		       </div>
            		   </div>
            	<div class="row">
            		       <div class="col-md-4">
            		       	<div class="form-group">
            		       		
            		      <label class="bmd-label-floating">Setor</label>
            		      <select class="custom-select" value="<?php echo $p->nome_setor ;?>"name="nome_setor" readonly>
            		          <option selected value="<?php $p->nome_setor;?>"><?php echo $p->nome_setor;?></option>

            		      </select>
            		       	</div>
            		       </div>
            		      <div class="col-md-4">
            		       	<div class="form-group">
            		       		
            		      <label class="bmd-label-floating">Tipo de chamado</label>
            		      <select class="custom-select" value="" name="tipo_chamado" readonly>
            		          <option selected value="<?php $p->tipo_chamado;?>"><?php echo $p->tipo_chamado;?></option>

            		      </select>
            		       	</div>
            		       </div>
            		       <input type="text" value="<?php echo $p->nome_setor;?>" name="nome_setor" hidden>
            		       <input type="text" value="<?php echo $p->tipo_chamado;?>" name="tipo_chamado" hidden>
                       <input type="text" value="<?php echo $p->resolvido;?>" name="resolvido" hidden>
            	</div>
            	<div class="form-group">
            	  <label class="bmd-label-floating"> Descrição dada sobre o problema.</label>
            	  <textarea class="form-control" rows="5" name="descricao"  readonly=""><?php echo $p->descricao; ?></textarea>
            	</div>

            	

            	<?php if($p->resolvido == 1):?> <!-- VERIFICA SE JÁ FOI RESOLVIDO O CHAMADO-->
            	
            	    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#atendimento" aria-expanded="false" aria-controls="atendimento">Detalhar Atendimento</button>
            	
            	<br>
            	<br>
            	<div class="collapse" id="atendimento">      	
            	<div class="row">
            	    
            	  <div class="col-md-3">
            	    <div class="form-group">
            	      <label class="bmd-label-floating">Data da Resolução</label>
            	      <input type="text" class="form-control"  value="<?php echo date("d/m/Y", strtotime($p->data_resolvido));?>" readonly>
            	    </div>
            	  </div>
            	  <div class="col-md-3">
            	    <div class="form-group">
            	      <label class="bmd-label-floating">Horário de fechamento do chamado</label>
            	      <input type="text" class="form-control"  value="<?php echo date("H:i", strtotime($p->data_resolvido));?>" readonly>
            	    </div>
            	  </div>
            	  	       <div class="col-md-3">
            		         <div class="form-group">
            		           <label class="bmd-label-floating">Nome do Técnico</label>
            		           <input type="text" class="form-control"  value="<?php echo $p->nome_tecnico;?>" readonly>
            		         </div>
            		       </div>
            		       
            		       <div class="col-md-3">
            		         <div class="form-group">
            		           <label class="bmd-label-floating">Matrícula do Técnico</label>
            		           <input type="text" class="form-control"  value="<?php echo $p->mat_tecnico;?>" readonly>
            		         </div>
            		       </div>
            		</div>
            		
            	
            		<div class="form-group">
            		  <label class="bmd-label-floating">O que o técnico fez para solucionar o problema.</label>
            		  <textarea class="form-control" rows="5"  readonly=""><?php echo $p->solucao; ?></textarea>
            		</div>
            	</div>



            	
            	   
            		       	<?php elseif($p->resolvido==0):?>
            		       		<div class="row">
            		       			
            		       		<div class="col-md-4">
            		       		  <div class="form-group">
            		       		    <label class="bmd-label-floating">Situação</label>
            		       		    <input type="text" class="form-control"  readonly value="Aguardando pelo atendimento" readonly>
            		       		  </div>
            		       		</div>
            		       		</div>
            		       		<?php else:?>
            		       		<div class="row">
            		       		<div class="col-md-4">
            		       		  <div class="form-group">
            		       		    <label class="bmd-label-floating">Situação</label>
            		       		    <input type="text" class="form-control"  readonly value="Em atendimento por <?php echo $p->nome_tecnico;?>" readonly>
            		       		  </div>
            		       		</div>
            		       		</div>
            		       	<?php endif; ?>
            		       	  <?php if($id_setor == 1 && $p->resolvido == 0 || $id_setor == 1 && $p->resolvido ==2 && $matricula == $p->mat_tecnico):?>
            		   <button type="submit" class="btn btn-primary">Atender</button>
            		   <?php endif;?>
            		   <div class="clearfix"></div>
            		       	</div>

            		       </div>
 
            		   </div>


            </form>
  

          <?php } ?>

                  </div>
                  </div>
                </div>
              </div>
               </div>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <nav class="float-left">
              <ul>

              </ul>
            </nav>

           
          </div>
        </footer>
      </div>
    </div>
  </body>
<?php include_once '../assets/carregaJS.php'; ?>
<script type="text/javascript">  
$(document).ready(function(){
    $('.collapsible').collapsible();
  });</script>
</html>      
<?php
require '../vendor/permissoes.php';
require '../vendor/listaSetor.php';
if(isset($_GET['patrimonio']) && $perfil == 1){
  $idPat = base64_decode($_GET['patrimonio']);
  $patriId = $bdpat->pesquisaId($idPat);
}else{
  $idPat = null;
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Patrimônios - Realizar Troca</title>
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
                  <div class="puff-in-center"> 
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Realocação de Patrimônio</h4>
                    <p class="card-category">Dados de Realocação</p>
                  </div>
                  <div class="card-body">
                   <?php 
                    foreach ($patriId as $p) {
                      # code...
                    
                    ?>

            <form action="../controllers/troca/ctrl_troca.php" method="post">
            	<div class="row">
            		
            	      <div class="col-md-5">
            	        <div class="form-group">
            	          <label class="bmd-label-floating">N° Patrimônio(a)</label>
            	          <input type="text" class="form-control" name="idpat" value="<?php echo $p->id_patrimonio;?>" readonly>
            	        </div>
            	      </div>
            	
            	      <div class="col-md-5">
            	        <div class="form-group">
            	          <label class="bmd-label-floating">Matricula</label>
            	          <input type="text" class="form-control" name="matricula" readonly value="<?php echo $matricula; ?>">
            	        </div>
            	      </div>
            	
            	</div>
            	<div class="row">
            		<div class="col-md-4">
            			<div class="form-group">
            				<label class="bmd-label-floating">Descrição</label>
            				<input type="text" class="form-control" name="descricao" value="<?php echo $p->descricao;?>" readonly>
            			</div>
            		</div>
            	<div class="col-md-4">
            	  <div class="form-group">
            	    <label class="bmd-label-floating">Unidade</label>
            	    <input type="text" class="form-control" name="unidade" value="<?php echo $p->unidade;?>" readonly>
            	  </div>
            	</div>
            	<div class="col-md-4">
            	  <div class="form-group">
            	    <label class="bmd-label-floating">Marca</label>
            	    <input type="text" class="form-control" name="marca" value="<?php echo $p->marca;?>" readonly>
            	  </div>
            	</div>
            	</div>
            	<div class="row">
            		
            	       <div class="col-md-6">
            	       	<div class="form-group">
            	       		
            	      <label class="bmd-label-floating">Setor Atual</label>
            	      <select class="custom-select" name="idsatual" readonly>
            	          <option selected value="<?php echo $p->id_setor;?>"><?php echo $p->nome_setor;?></option>
            	          <?php

            	          foreach ($setor as $key) {
            	          	# code...
            	          
            	          ?>
            	          <option value="<?php echo $key->id_setor; ?>"><?php echo $key->nome_setor; ?></option>
            	          <?php } ?>
            	      </select>
                        
            	       	</div>
            	       </div>

            			
            		       <div class="col-md-6">
            		       	<div class="form-group">
            		       		
            		      <label class="bmd-label-floating">Setor Destino</label>
            		      <select class="custom-select" name="idsdestino">
            		          <option selected value="">Selecione o Setor de Destino</option>
            		          <?php

            		          foreach ($setor as $key) {
            		          	# code...
            		          
            		          ?>
            		          <option value="<?php echo $key->id_setor; ?>"><?php echo $key->nome_setor; ?></option>
            		          <?php } ?>
            		      </select>
            	            <input type="" name="idantigo" value="<?php echo $idPat;?>" hidden="">
            		       	</div>
            		       </div>
            		</div>

            		
            	  <button type="submit" class="btn btn-primary">Alterar</button>
            	  <div class="clearfix">
                  
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

  </html>      
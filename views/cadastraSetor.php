<?php header("Content-type: text/html; charset=utf-8",true); ?>
<?php

require '../vendor/permissoes.php';
?>
<!DOCTYPE html>
<html>

<head><meta charset="gb18030">
  <title>Patrimônios - Cadastro de Setor</title>
  <!-- Required meta tags -->
  
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
                    <h4 class="card-title">Setor</h4>
                    <p class="card-category">Dados de Cadastro</p>
                  </div>
                  <div class="card-body">
                    
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
            	      <label class="bmd-label-floating">Coordenador(a)</label>
            	      <input type="text" class="form-control" name="coordenador">
            	    </div>
            	  </div>

            	<button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
            	<div class="clearfix"></div>
            </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
        <footer class="footer">

        </footer>
      </div>
    </div>
  </body>
<?php include_once '../assets/carregaJS.php'; ?>

  </html>      
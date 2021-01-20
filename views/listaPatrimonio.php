<?php
session_start();
require '../vendor/setdeSessao.php';
require '../vendor/listaSetor.php';

$proxima = $p_a + 1;
$anterior = $p_a - 1;
?>
<!doctype html>
<html lang="en">

<head>
  <title>Patrimônios - Pesquisa de Patrimônio</title>
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
</head>

<body>
  
  	<?php include_once '../assets/navbar.php'; ?>

        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                  <div class="fade-in-fwd">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title ">Patrimônios </h4>
                    <p class="card-category"> Lista dos patrimônios e os setores alocados.</p>
                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">

                      <?php if(isset($_POST['pesquisaid'])):
                        require_once '../models/DAO/bd_patrimonio.php';

                        $patrid = $_POST['pesquisaid'];

                        $bdpat = new bd_patrimonio();

                        $pat = $bdpat->pesquisaId($patrid);
                        ?>  
                        <?php include_once '../assets/patrimonio/listagemPatId.php';?><!-- PESQUISA ESPECÍFICA POR PATRIMÔNIO -->
                                            
                      
                      <?php else:?>
                          <p class="card-category"> Página: <?=$p_a?> de <?=$paginas?> Páginas</p>
                          
                          <?php include_once '../assets/patrimonio/listagemPat.php';?><!-- LISTA DE TODOS OS PATRIMÔNIOS -->

                      <?php endif;?>
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
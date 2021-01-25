<?php
session_start();
require_once '../vendor/setdeSessao.php';
require_once'../vendor/listaSetor.php';
if(isset($_GET['patrimonio']) && $perfil == 1){
  $idPat = base64_decode($_GET['patrimonio']);
  $patriId = $bdpat->pesquisaId($idPat);
}else{
  $idPat = null;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Patrimônios - Cadastrar Patrimônio</title>
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
                  <h4 class="card-title">Patrimônio</h4>
                  <p class="card-category">Dados de Cadastro</p>
                </div>
                <div class="card-body">
                 <?php if(isset($idPat)):
                  foreach ($patriId as $p) {
                      # code...
                    
                    ?>

                    <?php include_once '../assets/patrimonio/formAlteraPatrimonio.php';?>


                    <?php } else: ?> <!-- ELSE -->

                    <?php include_once '../assets/patrimonio/formCadastraPatrimonio.php';?>

                  <?php endif;?>
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

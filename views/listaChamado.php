<?php
session_start();
require '../vendor/setdeSessao.php';
require '../vendor/listaSetor.php';


 $form_titulo = "Chamados Realizados no Setor";
 $form_sub_titulo = "Aqui estão listados os chamados abertos por você e seus colegas";
  


if($id_setor == 1){
  $listachamado = $bd_chamado->listachamadoNTI();
}else{
 $listachamado = $bd_chamado->listatudochamado($id_setor);

    
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Patrimônios - Chamados Realizados</title>
  <!-- Required meta tags -->
  <meta charset="utf8">
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
                  <div class="fade-in-fwd">
                      
                  
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title "><?php echo $form_titulo;?></h4>
                    <p class="card-category"><?php echo $form_sub_titulo;?></p>
                  </div>
 
                  <div class="card-body">
                    <?php include_once '../assets/chamado/listagemCham.php';?>
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

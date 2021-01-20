<?php
session_start();
require '../vendor/setdeSessao.php';
require '../vendor/listaSetor.php';
if (isset($_GET['trocasid'])) {
 $trocaid = base64_decode($_GET['trocasid']);
 $trocasPat = $bdtroca->listaTrocaPat($trocaid);
}else{
  $trocaid = null;
}
 $anterior = $t_p_a -1;
 $proxima = $t_p_a +1;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Patrimônios - Realocações</title>
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
                    <h4 class="card-title ">Realcações</h4>
                    <p class="card-category"> Realocações realizadas entre setores.</p>
                  </div>
                  <?php if(!isset($trocaid)): ?> <!-- VERIFICA SE FOI PASSADO O ID DO PATRIMÔINIO -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <?php include_once '../assets/trocas/listaTroca.php';?> <!-- INCLUI A LISTA DE TODAS AS TROCAS -->
                    </div>
                  </div>
                  <?php else: ?> <!-- AQUI É ONDE LISTA AS TROCAS DE UM SÓ PATRIMÔNIO -->
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <th>
                              Patrimônio
                            </th>
                            <th>
                              Funcionário
                            </th>
                            <th>
                              Setor Atual
                            </th>
                            <th>
                              Data de Alocação
                            </th>
                            <th>
                              Detalhar
                            </th>
                          </thead>
                          <tbody>
                            <?php 


                            foreach ($trocasPat as $trp) {?>
                              
                            <tr>
                              <td>
                                <?php echo $trp->id_patrimonio;?>
                              </td>                            
                              <td>
                                <?php echo $trp->nome;?>
                              </td>
                              <td>
                                <?php echo $trp->nome_setor;?>
                              </td>
                              <td>
                                <?php echo date("d/m/Y", strtotime($trp->data_troca));?>
                              </td>
                              <td class="">
                                <a href="../views/detalhatroca.php?dettroca=<?php echo base64_encode($trp->id_troca);?>">
                                  
                                <button type="button" rel="tooltip" title="Detalhar" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">library_books</i>
                                </button>
                                </a>
                                </td>
                            </tr>
                            <?php }?>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  <?php endif;?>
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

<?php include '../assets/carregaJS.php'; ?>

  </html>      
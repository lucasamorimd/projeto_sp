<?php
session_start();
require '../vendor/setdeSessao.php';
require '../vendor/listaSetor.php';
?>

<!DOCTYPE html>
<html>

<head><meta charset="gb18030">
  <title>Patrimônios - Pesquisa de Setor</title>
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
                  <div class="fade-in-fwd">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title ">Setores</h4>
                    <p class="card-category"> Setores e seus respectivos coordenadores.</p>
                  </div>
                  <div class="card-body">
                      
                    <form action="" method="post">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome do Setor</label>
                          <input type="text" class="form-control" name="pesquisaNome" >
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Pesquisar</button>
                      <div class="clearfix">
                        
                      </div>
                    </div>
                    </form>
                    <?php if(isset($_POST['pesquisaNome'])){
                      $nomeSetor = $_POST['pesquisaNome'];
                      $pesqNome = $bdsetor->pesquisaSetorNome($nomeSetor);?>

                      <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <th>
                              ID
                            </th>
                            <th>
                              Setor
                            </th>
                            <th>
                              Coordenador
                            </th>
                            
                          </thead>
                          <tbody>
                            <?php foreach ($pesqNome as $ky) {?>
                              
                            <tr>
                              <td>
                                <?php echo $ky->id_setor;?>
                              </td>                            
                              <td>
                                <?php echo $ky->nome_setor;?>
                              </td>
                              <td>
                                <?php echo $ky->coordenador;?>
                              </td>

                            </tr>
                            <?php }?>


                          </tbody>
                        </table>
                      </div>

                    <?php }else{
                      $nomeSetor = null;?>

                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                            ID
                          </th>
                          <th>
                            Setor
                          </th>
                          <th>
                            Coordenador
                          </th>
                          
                        </thead>
                        <tbody>
                        	<?php foreach ($setor as $key) {?>
                        		
                          <tr>
                            <td>
                              <?php echo $key->id_setor;?>
                            </td>                            
                            <td>
                              <?php echo $key->nome_setor;?>
                            </td>
                            <td>
                              <?php echo $key->coordenador;?>
                            </td>

                          </tr>
                        	<?php }?>


                        </tbody>
                      </table>
                    </div>
                  <?php } ?>
                    
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
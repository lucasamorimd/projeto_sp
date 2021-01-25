<?php
session_start();
require_once '../vendor/setdeSessao.php';
require_once '../vendor/listaSetor.php';

foreach ($usuperf as $key ) {

}

?>

<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Patrimônios - Perfil
 </title>
 <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
 <!-- Material Kit CSS -->
 <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
</head>

<body class="">
  <?php include '../assets/navbar.php'; ?>
  <!-- End Navbar -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="fade-in-fwd">
            <div class="card">
              <div class="card card-profile card-header card-header-primary">
                <div class="card-avatar">
                  <?php if($key->foto == null):?>
                    
                    <a href="../views/perfil.php">
                      
                      <img class="img" src="../assets/img/faces/perfil-blog.png" />
                    </a>
                    <?php else:?>
                      <a href="../views/perfil.php">
                        
                        <img class="img fotoperfil" src="../assets/img/faces/<?php echo $key->foto;?>" />
                      </a>
                    <?php endif;?>
                  </div>
                  
                  <h4 class="card-title">Perfil</h4>
                  <p class="card-category">Dados de Cadastro</p>
                  
                </div>
                <div class="card-body">
                  <form method="POST" enctype="multipart/form-data" action="../controllers/ctrl_fotoperfil.php">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Matrícula</label>
                          <input type="text" class="form-control" value="<?php echo $key->matricula;?>"disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome</label>
                          <input type="text" class="form-control" value="<?php echo $key->nome;?>" disabled="">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" value="<?php echo $key->email; ?>" disabled="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Setor</label>
                          <input type="text" class="form-control" value="<?php echo $key->nome_setor;?>" disabled="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gestor do Setor</label>
                          <input type="text" class="form-control" value="<?php echo $key->coordenador;?>" disabled="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <?php if($key->perfil == 1): ?>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Tipo de Perfil</label>
                            <input type="text" class="form-control" value="Coordenador" disabled="">
                          </div>
                        </div>
                        <?php else:?>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd-label-floating">Tipo de Perfil</label>
                              <input type="text" class="form-control" value="Funcionário" disabled="">
                            </div>
                          </div>
                        <?php endif; ?>
                        <div class="col-md-3">
                          
                          <div class="file-field input-field">
                            
                            <input type="file" name="fotoperfil">
                            

                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Salvar Foto</button>
                      <div class="clearfix">
                        
                      </div>
                    </form>
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

  <?php include '../assets/carregaJS.php'; ?>
</body>

</html>

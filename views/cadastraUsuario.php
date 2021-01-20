<?php header("Content-type: text/html; charset=utf-8",true); ?>
<?php

session_start();
require_once '../vendor/listaSetor.php';
require_once '../vendor/setdeSessao.php';
if($matricula != 1234){
header('Location: ../painel/index.php');
die();   
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
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  
  <title>
   Patrimônios - Cadastro de Usuário
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
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

<body class="">
  <?php include '../assets/navbar.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="puff-in-center">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Perfil</h4>
                  <p class="card-category">Dados de Cadastro</p>
                </div>
                <div class="card-body">
                  <form accept-charset="utf-8" action="../controllers/usuario/ctrl_usuario.php" method="post">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Matrícula</label>
                          <input type="text" class="form-control" name="matricula">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome/Sobrenome</label>
                          <input type="text" class="form-control" name="nome">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-4">
                        <div class="form-group">
                          
                      <label class="bmd-label-floating">Setor</label>
                      <select class="custom-select" name="id_setor">
                          <option selected value="">Selecione o Setor</option>
                          <?php

                          foreach ($setor as $key) {
                            # code...
                          
                          ?>
                          <option value="<?php echo $key->id_setor; ?>"><?php echo $key->nome_setor; ?></option>
                          <?php } ?>
                      </select>
                        </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group">
                           <label class="bmd-label-floating">Perfil</label>
                           <select class="custom-select" name="perfil">
                             <option selected value="">Selecione o Tipo de Perfil</option>
                             <option value="1">Gestor</option>
                             <option value="2">Funcionário</option>
                           </select>
                         </div>
                       </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
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
  
<?php include_once '../assets/carregaJS.php'; ?>
</body>

</html>
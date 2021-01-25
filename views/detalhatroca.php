<?php
session_start();
require '../vendor/setdeSessao.php';
require '../vendor/listaSetor.php';
if(isset($_GET['dettroca'])){
  $idtroca = base64_decode($_GET['dettroca']);
  $trocadeti = $bdtroca->detalhaTroca($idtroca);
  $trocasetorAntigo = $bdtroca->detalhaTrocaAntigo($idtroca);

}else{
  $idPat = null;
}
?>
<!doctype html>
<html>

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
            
            <div class="card">
              <div class="tilt-in-right-1">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Realocação de Patrimônio</h4>
                  <p class="card-category">Dados de Cadastro</p>
                </div>
              </div>
              <div class="puff-in-center">
                <div class="card-body">
                 <?php 
                 foreach ($trocadeti as $p) {
                      # code...
                    /*  echo "<pre>";
                    print_r($p);
                    die('oi');
                    echo "</pre>";*/
                    ?>

                    <form action="printRealocacao.php" method="post" target="_blank">
                      <div class="row">
                        
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="bmd-label-floating">Protocolo de troca</label>
                            <input type="text" class="form-control" name="idtroca" value="<?php echo $p->id_troca;?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">N° Patrimônio(a)</label>
                            <input type="text" class="form-control" name="idpat" value="<?php echo $p->id_patrimonio;?>" readonly>
                          </div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Matricula do responsável</label>
                            <input type="text" class="form-control" name="matricula" readonly value="<?php echo $p->matricula; ?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Nome do responsável</label>
                            <input type="text" class="form-control" name="unidade" value="<?php echo $p->nome;?>" readonly>
                          </div>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="bmd-label-floating">Descrição</label>
                            <input type="text" class="form-control" name="descricao" value="<?php echo $p->descricao;?>" readonly>
                          </div>
                        </div>

                        
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="bmd-label-floating">Marca</label>
                            <input type="text" class="form-control" name="marca" value="<?php echo $p->marca;?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="bmd-label-floating">Data da Realocação</label>
                            <input class="form-control" name="data_troca" value="<?php echo date("d/m/Y", strtotime($p->data_troca));?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="bmd-label-floating">Horário da Realocação</label>
                            <input type="text" class="form-control" name="hora_troca" value="<?php echo date("H:i", strtotime($p->data_troca));?>" readonly>
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
                              <option value=""><?php echo $key->nome_setor; ?></option>
                            <?php } ?>
                          </select>
                          <input type="" name="setor_atual" value="<?php echo $p->nome_setor;?>" hidden="hidden">
                        </div>
                      </div>

                      
                      <div class="col-md-6">
                        <div class="form-group">
                          
                          <?php
                          foreach ($trocasetorAntigo as $key) {?>
                            <label class="bmd-label-floating">Setor Antigo</label>
                            <select class="custom-select" name="idsdestino" readonly>
                             
                              <option value="<?php echo $key->id_setor; ?>"><?php echo $key->nome_setor; ?></option>

                              
                            </select>
                            <input type="" name="setor_antigo" value="<?php echo $key->nome_setor; ?>" hidden="hidden">
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" target="_blank">Imprimir</button>
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

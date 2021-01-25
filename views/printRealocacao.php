<?php
$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($params)){
  $idtroca = $params['idtroca'];
  $idpat = $params['idpat'];
  $matricula = $params['matricula'];
  $unidade = $params['unidade'];
  $descricao = $params['descricao'];
  $marca = $params['marca'];
  $data_troca = $params['data_troca'];
  $hora_troca = $params['hora_troca'];
  $setor_atual = $params['setor_atual'];
  $setor_antigo = $params['setor_antigo'];
}else{
  $params = null;
}

?>


<html >

<head>

  <title>Patrimônios - Impressão</title>
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
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
    select[] {
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
  <script type="text/javascript">
    setTimeout("window.close();",1000);
  </script>
</head>

<body>
  <div class="content">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-12"> 
          <div class="card">
            <div class="card-header card-header-primary">
              <h6 class="card-title">Realocação de Patrimônio</h6>
              <p class="card-category">Dados da Realocação</p>
            </div>
            <div class="card-body">

              <form>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="bmd-label-floating">Protocolo de troca</label>
                      <input type="text" class="form-control" name="idtroca" value="<?php echo $idtroca;?>" >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">N° Patrimônio(a)</label>
                      <input type="text" class="form-control" name="idpat" value="<?php echo $idpat;?>" >
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Matricula do responsável</label>
                      <input type="text" class="form-control" name="matricula"  value="<?php echo $matricula; ?>" >
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nome do responsável</label>
                      <input type="text" class="form-control" name="unidade" value="<?php echo $unidade;?>" re>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Descrição</label>
                      <input type="text" class="form-control" name="descricao" value="<?php echo $descricao;?>" >
                    </div>
                  </div>

                  
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Marca</label>
                      <input type="text" class="form-control" name="marca" value="<?php echo $marca;?>" >
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Data da Realocação</label>
                      <input  class="form-control" name="data" value="<?php echo $data_troca;?>" >
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Horário da Realocação</label>
                      <input type="text" class="form-control" name="marca" value="<?php echo $hora_troca;?>" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  
                 <div class="col-md-6">
                  <div class="form-group">
                    
                    <label class="bmd-label-floating">Setor Atual</label>
                    <select class="custom-select" name="idsatual" >
                      <option selected value=""><?php echo $setor_atual;?></option>
                      
                    </select>
                    
                  </div>
                </div>

                
                <div class="col-md-6">
                  <div class="form-group">
                    
                    
                    <label class="bmd-label-floating">Setor Antigo</label>
                    <select class="custom-select" name="idsdestino" >
                     
                      <option selected value=""><?php echo $setor_antigo; ?></option>

                    </select>
                    
                    
                  </div>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<?php include '../assets/carregaJS.php'; ?>
<script type="text/javascript">
  window.print();
</script>
<script type="text/javascript">
  window.onload = function() { window.print();}
</script>
</html>    

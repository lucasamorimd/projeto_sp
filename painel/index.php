<?php 
session_start();

require '../vendor/listaSetorLimit.php';
require '../vendor/listaSetor.php';

if(isset($_SESSION['userlogado']) && $_SESSION['userlogado'] == 1){
  $nome = $_SESSION['nomeuser'];
  $email = $_SESSION['emailuser'];
  $matricula = $_SESSION['matriculauser'];
  $perfil = $_SESSION['perfiluser'];
  $setorC = $_SESSION['setoruser'];
  $foto = $_SESSION['fotouser'];
}else{
  header ("location: ../index.php");
  exit();
}




if(isset($_GET['mensagem'])){
  $cor = $_SESSION['cor'];
  $msg = $_GET['mensagem'];
  $not =  "md.showNotification('top','right','".$msg.", ".strtoupper($_SESSION['nomeuser'])."!"."','".$cor."')";
  
}else{
  $cor = null;
  $msg = null;
  $not = null;
}
$fon = count($aachamados);

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
<html >

<head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title id="not">
   <?php if($fon != 0 && $setorC == 1){ echo "(".$fon.") Patrimônios - Inicial";}else{echo "Patrimônios - Inicial" ;}?>  
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
  </head>

  <body id="body-not" class="" onload="<?php echo $not;?>">
    <div class="wrapper ">
      <?php include_once '../assets/navbar.php';?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         
          

          <?php include_once '../views/inicial.php';?>

        </div>
      </div>

      <?php include_once '../assets/carregaJS.php'; ?>
      <?php if($id_setor == 1){include '../lib/jssocket/websocket.php';}else{
        
      } ?>

    </body>

    </html>

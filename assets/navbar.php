<div class="wrapper ">
  
  <div class="sidebar" data-color="purple" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="tilt-in-left-1">
      <?php if($perfil == 1):?>
        <div class="logo">
          <?php if($foto == null):?>
            <div class="card card-profile">
              <div class="card-avatar-1">
                <div class="card-avatar">
                  <a href="../views/perfil.php">
                    
                    <img class="img" src="../assets/img/faces/perfil-blog.png" />
                  </a>
                </div>
              </div>
              Clique na imagem para alterar sua foto!
            </div>
            <?php else:?>
              <div class="card card-profile">
                <div class="card-avatar-1">
                  <div class="card-avatar">
                    <a href="../views/perfil.php">
                      
                      <img class="img fotoperfil" src="../assets/img/faces/<?php echo $foto;?>" />
                    </a>
                  </div>
                </div>
              </div>
            <?php endif;?>
            
            

            
            <a href="#" class="simple-text logo-mini">
              Gestor,
            </a>
            <a href="#" class="simple-text logo-normal">
              <?php echo $nome;?>
            </a>
          </div>
          <?php else:?>
            <div class="logo">
              <?php if($foto == null):?>
                <div class="card card-profile">
                  <div class="card-avatar-1">
                    <div class="card-avatar">
                      <a href="../views/perfil.php">
                        
                        <img class="img" src="../assets/img/faces/perfil-blog.png" />
                      </a>
                    </div>
                  </div>
                  Clique na imagem para alterar sua foto!
                </div>
                <?php else:?>
                  <div class="card card-profile">
                    <div class="card-avatar-1">
                      <div class="card-avatar">
                        <a href="../views/perfil.php">
                          
                          <img class="img fotoperfil" src="../assets/img/faces/<?php echo $foto;?>" />
                        </a>
                      </div>
                    </div>
                  </div>
                <?php endif;?>
                <a href="#" class="simple-text logo-mini">
                  Funcionário,
                </a>
                <a href="#" class="simple-text logo-normal">
                  <?php echo $nome;?>
                </a>
              </div>
            <?php endif;?>

            <div class="sidebar-wrapper">
              <ul class="nav">
                <li class="nav-item  ">
                  <a class="nav-link" href="../painel/index.php">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                  </a>

                </li>
                <!-- your sidebar here -->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="javascript:;" id="navbarDropdownCham" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Solicitações
                    <i class="material-icons">build_circle</i>

                  </a>
                  <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownCham">
                    
                    <a class="dropdown-item" href="../views/cadastraChamado.php">
                      <i class="material-icons">build</i>
                      <p>Nova Solicitação</p>
                    </a>
                    
                    
                    <a class="dropdown-item" href="../views/listaChamado.php">
                      <i class="material-icons">content_paste</i>
                      <p>Solicitações Gerais</p>
                    </a>
                    
                    <a class="dropdown-item" href="../views/listaMeusChamados.php">
                      <i class="material-icons">article</i>
                      <p>Minhas Solicitações</p>
                    </a>
                    
                  </div>
                </li>
                <li class="nav-item dropdown">
                 <a class="nav-link" href="javascript:;" id="navbarDropdownPat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Patrimônios
                   <i class="material-icons">content_copy</i>
                 </a>
                 <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownPat">
                   
                   <a class="dropdown-item" href="../views/cadastraPatrimonio.php">
                     <i class="material-icons">input</i>
                     <p>Novo Patrimônio</p>
                   </a>
                   
                   
                   <a class="dropdown-item" href="../views/listaPatrimonio.php">
                     <i class="material-icons">content_paste</i>
                     <p>Listar Patrimônios</p>
                   </a>
                   <a class="dropdown-item" href="../views/listaTrocas.php">
                    <i class="material-icons">compare_arrows</i>
                    <p>Realocações Feitas</p>
                  </a>
                </div>
              </li>

              <li class="nav-item dropdown">
               <a class="nav-link" href="javascript:;" id="navbarDropdownSet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Setores
                 <i class="material-icons">store</i>
               </a>
               <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownSet">
                 <?php if($perfil == 1):?>

                   <a class="dropdown-item" href="../views/cadastraSetor.php">
                     <i class="material-icons">account_balance</i>
                     <p>Novo Setor</p>
                   </a>

                   <?php else:?>

                   <?php endif;?>

                   <a class="dropdown-item" href="../views/listaSetor.php">
                     <i class="material-icons">library_books</i>
                     <p>Setores Cadastrados</p>
                   </a>

                 </li>
                 <li class="nav-item ">

                 </li>
                 <?php if($perfil == 1 && $id_setor == 1):?>
                   <li class="nav-item ">
                    <a class="nav-link" href="#" onclick="md.showNotification('top','right','Sistema de Teste não permite o cadastro de novos usuários!')" >
                      <i class="material-icons">person</i>
                      <p>Novo Usuário</p>
                    </a>
                  </li>
                  <?php else:?>

                  <?php endif;?>
                </ul>
              </div>
            </div>
          </div>
          <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
              <div class="container-fluid">
                <div class="navbar-wrapper">
                  <a class="navbar-brand" href="../painel/index.php">Dashboard</a>
                  <?php if($dir1 != "index.php"):?>
                    <a class="navbar-brand" href="JavaScript: window.history.back();">Voltar</a>
                  <?php endif;?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                  <form class="navbar-form" action="../views/listaPatrimonio.php" method="post">
                    <div class="input-group no-border">
                      <input type="text" name="pesquisaid" class="form-control" placeholder="Pesquisa por Patrimônio" style="background-color:#fff; border-radius:8px; margin-top: 3px;">
                      <button type="submit" class="btn btn-white btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                      </button>
                    </div>
                  </form>
                  

                  <ul class="navbar-nav">


                    <li class="nav-item dropdown">
                      <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                          Info
                        </p>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="../views/perfil.php">Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../controllers/ctrl_login.php?token=<?=md5(session_id())?>">Logout</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar -->
            

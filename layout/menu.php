<?php
require("layout/topo.php");
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cantinho da Cegonha <sup><i class="far fa-registered"></i></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!--inicio menu-->
      <!--menu com permissão para caixas
      <?php
      if ($_SESSION['permissao'] == "caixa"){
      ?>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Início</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <!--<div class="sidebar-heading">
        Cadastros de Usuários
      </div>
    -->
    <!--<div class="sidebar-heading">
    Compras Por Marcas
  </div>
  -->


  <!--<div class="sidebar-heading">
  Balanceamento
  </div>-->


  <!--  <div class="sidebar-heading">
  Conferências Entradas
  </div>
  -->
  <div class="sidebar-heading">
  Auxilio P/ Caixa
  </div>
  <li class="nav-item">

  <a class="nav-link" href="cadernodeponto.php">
    <i class="fas fa-book"></i>
    <span>Caderno de Ponto</span></a>
  </li>
  <li class="nav-item">

    <a class="nav-link" href="importarEntrada.php">
      <i class="fas fa-book"></i>
      <span>Conferir Entradas</span></a>
    </li>
    <div class="sidebar-heading">
      Conferência de Estoque
    </div>
    <li class="nav-item">

      <a class="nav-link" href="fazerconferencia.php">
        <i class="fas fa-box-open"></i>
        <span>Conferir Estoque</span></a>
      </li>

      <div class="sidebar-heading">
        Atualizar Banco de Dados
      </div>
      <li class="nav-item">

        <a class="nav-link" href="atualizarbanco.php">
          <!-- <i class="fas fa-book"></i> -->
          <span><button type="button" class="btn btn-warning btn-lg">Atualizar</button></span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



      </ul>
      <!-- End of Sidebar -->

      <?php
    }
    ?>


    <!--menu com permissão  root -->
    <?php


    if ($_SESSION['permissao'] == "root"){?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Início</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <!--<div class="sidebar-heading">
        Cadastros de Usuários
      </div>
    -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
      aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-baby"></i>
      <span>Usuários</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

        <a class="collapse-item" href="usuario.php">Cadastrar Usuários</a>
        <a class="collapse-item" href="listarusuario.php">Listar Usuários</a>
      </div>
    </div>
  </li>

  <!--<div class="sidebar-heading">
  Compras Por Marcas
</div>
-->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
  aria-expanded="true" aria-controls="collapseUtilities">
  <i class="far fa-address-book"></i>
  <span>Compras Por Marcas</span>
</a>
<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
  <h6 class="collapse-header">Selecione a Cidade:</h6>
  <a class="collapse-item" href="marcasbm.php">Brasília </a>
  <a class="collapse-item" href="marcasjn.php">Januária</a>
  <a class="collapse-item" href="marcassf.php">São Francisco</a>
  <a class="collapse-item" href="importar.php">Importar Dados</a>

</div>
</div>
</li>

<!--<div class="sidebar-heading">
Balanceamento
</div>-->

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
  aria-expanded="true" aria-controls="collapsePages">
  <i class="fas fa-baby-carriage"></i>
  <span>Balanceamento</span>
</a>
<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Loja para Retirar</h6>
    <a class="collapse-item" href="sugestaobm.php">Brasília</a>
    <a class="collapse-item" href="sugestao.php">Januária</a>
    <a class="collapse-item" href="sugestaosf.php">São Francisco</a>
    <a class="collapse-item" href="importar.php">Importar Dados</a>
  </div>
</div>
</li>
<!--  <div class="sidebar-heading">
Conferências Entradas
</div>
-->
<div class="sidebar-heading">
  Conferências Entradas
</div>
<li class="nav-item">

  <a class="nav-link" href="importarTransferencia.php">
    <i class="fas fa-book"></i>
    <span>Conferir Transferencia</span></a>
  </li>
  <li class="nav-item">

    <a class="nav-link" href="importarEntrada.php">
      <i class="fas fa-book"></i>
      <span>Conferir Entradas</span></a>
    </li>
    <div class="sidebar-heading">
      Conferência de Estoque
    </div>
    <li class="nav-item">

      <a class="nav-link" href="fazerconferencia.php">
        <i class="fas fa-box-open"></i>
        <span>Conferir Estoque</span></a>
      </li>
      <li class="nav-item">

        <a class="nav-link" href="listarconferencia.php">
          <i class="fas fa-envelope"></i>
          <span>Conferências Salvas</span></a>
        </li>

        <div class="sidebar-heading">
          Atualizar Banco de Dados
        </div>
        <li class="nav-item">

          <a class="nav-link" href="atualizarbanco.php">
            <!-- ?  <i class="fas fa-book"></i> -->
            <span><button type="button" class="btn btn-warning btn-lg">Atualizar</button></span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">



          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>



        </ul>
        <!-- End of Sidebar -->

        <?php
      }
      ?>

      <!--menu com permissão para supervisores ou pessoas que confere as entradas
      <?php
      if ($_SESSION['permissao'] == "estoque"){
      ?>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Início</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <!--<div class="sidebar-heading">
        Cadastros de Usuários
      </div>
    -->
    <!--<div class="sidebar-heading">
    Compras Por Marcas
  </div>
-->


<!--<div class="sidebar-heading">
Balanceamento
</div>-->


<!--  <div class="sidebar-heading">
Conferências Entradas
</div>
-->
<div class="sidebar-heading">
  Conferências Entradas
</div>
<li class="nav-item">

  <a class="nav-link" href="importarTransferencia.php">
    <i class="fas fa-book"></i>
    <span>Conferir Transferencia</span></a>
  </li>
  <li class="nav-item">

    <a class="nav-link" href="importarEntrada.php">
      <i class="fas fa-book"></i>
      <span>Conferir Entradas</span></a>
    </li>
    <div class="sidebar-heading">
      Conferência de Estoque
    </div>
    <li class="nav-item">

      <a class="nav-link" href="fazerconferencia.php">
        <i class="fas fa-box-open"></i>
        <span>Conferir Estoque</span></a>
      </li>

      <div class="sidebar-heading">
        Atualizar Banco de Dados
      </div>
      <li class="nav-item">

        <a class="nav-link" href="atualizarbanco.php">
          <!-- <i class="fas fa-book"></i> -->
          <span><button type="button" class="btn btn-warning btn-lg">Atualizar</button></span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



      </ul>
      <!-- End of Sidebar -->

      <?php
    }
    ?>



    <?php
    if ($_SESSION['permissao'] == "administrador"){?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Início</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="far fa-address-book"></i>
          <span>Compras Por Marcas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Selecione a Cidade:</h6>
          <a class="collapse-item" href="marcasbm.php">Brasília </a>
          <a class="collapse-item" href="marcasjn.php">Januária</a>
          <a class="collapse-item" href="marcassf.php">São Francisco</a>
          <a class="collapse-item" href="importar.php">Importar Dados</a>

        </div>
      </div>
    </li>

    <!--<div class="sidebar-heading">
    Balanceamento
  </div>-->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
    aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-baby-carriage"></i>
    <span>Balanceamento</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Loja para Retirar</h6>
      <a class="collapse-item" href="sugestaobm.php">Brasília</a>
      <a class="collapse-item" href="sugestao.php">Januária</a>
      <a class="collapse-item" href="sugestaosf.php">São Francisco</a>
      <a class="collapse-item" href="importar.php">Importar Dados</a>
    </div>
  </div>
</li>
<!--  <div class="sidebar-heading">
Conferências Entradas
</div>
-->
<div class="sidebar-heading">
  Conferências Entradas
</div>
<li class="nav-item">

  <a class="nav-link" href="importarTransferencia.php">
    <i class="fas fa-book"></i>
    <span>Conferir Transferencia</span></a>
  </li>
  <li class="nav-item">

    <a class="nav-link" href="importarEntrada.php">
      <i class="fas fa-book"></i>
      <span>Conferir Entradas</span></a>
    </li>
    <div class="sidebar-heading">
      Conferência de Estoque
    </div>
    <li class="nav-item">

      <a class="nav-link" href="fazerconferencia.php">
        <i class="fas fa-box-open"></i>
        <span>Conferir Estoque</span></a>
      </li>

      <div class="sidebar-heading">
        Atualizar Banco de Dados
      </div>
      <li class="nav-item">

        <a class="nav-link" href="atualizarbanco.php">
          <!-- <i class="fas fa-book"></i> -->
          <span><button type="button" class="btn btn-warning btn-lg">Atualizar</button></span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



      </ul>
      <!-- End of Sidebar -->
      <?php
    }
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small"
                placeholder="Search for..." aria-label="Search"
                aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">

          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            <?php
            if($_SESSION['empresa'] == 1){
              echo "Olá ".$_SESSION['Nome']." Você está na Cidade de JANUÁRIA";
            }
            if($_SESSION['empresa'] == 2){
              echo "Olá ".$_SESSION['Nome']." Você está na Cidade de SÃO FRANCISCO";
            }
            if($_SESSION['empresa'] == 5){
              echo "Olá ".$_SESSION['Nome']." Você está na Cidade de BRASILIA DE MINAS";
            }
            ?>
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">

          </span>
          <img class="img-profile rounded-circle"
          src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Sair
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->

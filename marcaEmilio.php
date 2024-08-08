<?php
if(!isset($_SESSION)){
        session_start();
  }
  $_SESSION['JNBM'] = 0;
  $_SESSION['JNBM1']=0;
  $_SESSION['JNBM2']=0;
  $_SESSION['JNBM3']=0;

include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <title>Cantinho Compras</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

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
            <div class="sidebar-heading">
                Cadastros de Usuários
            </div>
            <li class="nav-item">
                <a class="nav-link" href="usuario.php">
                    <i class="fas fa-baby"></i>
                    <span>Cadastrar Usuários</span></a>

             </li>
             <li class="nav-item">
                 <a class="nav-link" href="listarusuario.php">
                   <i class="fas fa-address-card"></i>

                     <span>Listar Usuários</span></a>
              </li>

              <div class="sidebar-heading">
                  Compras Por Marcas
              </div>
              <li class="nav-item">
                  <a class="nav-link" href="marcasjn.php">
                      <i class="far fa-address-book"></i>
                      <span>Januária</span></a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="marcassf.php">
                       <i class="far fa-address-book"></i>
                       <span>São Francisco</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="marcasbm.php">
                        <i class="far fa-address-book"></i>
                        <span>Brasília</span></a>
                 </li>

                 <li class="nav-item">

                       <a class="nav-link" href="importar.php">
                           <i class="fas fa-fw fa-table"></i>
                           <span>Importar Dados</span></a>
                   </li>
            <div class="sidebar-heading">
                Balanceamento
            </div>
            <li class="nav-item">
                <a class="nav-link" href="sugestao.php">
                    <i class="fas fa-baby-carriage"></i>
                    <span>Retirar Januária</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="sugestaosf.php">
                     <i class="fas fa-baby-carriage"></i>
                     <span>Retirar São Francisco</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="sugestaobm.php">
                      <i class="fas fa-baby-carriage"></i>
                      <span>Retirar Brasília</span></a>
               </li>

               <li class="nav-item">

                     <a class="nav-link" href="importar.php">
                         <i class="fas fa-fw fa-table"></i>
                         <span>Importar Dados</span></a>
                 </li>



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

                        <a class="nav-link" href="leitorjn.php">
                           <i class="fas fa-box-open"></i>
                            <span>Januária</span></a>
                    </li>


                  <!-- Nav Item - Pages Collapse Menu -->
                  <li class="nav-item">

                        <a class="nav-link" href="leitorsf.php">
                            <i class="fas fa-box-open"></i>
                            <span>São Francisco</span></a>
                    </li>

                  </li>
                  <!-- Nav Item - Utilities Collapse Menu -->
                  <li class="nav-item">

                        <a class="nav-link" href="leitorbm.php">
                            <i class="fas fa-box-open"></i>
                            <span>Brasília de Minas</span></a>
                    </li>

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

                    <a class="nav-link" href="leitorjn.php">
                       <i class="fas fa-box-open"></i>
                        <span>Januária</span></a>
                </li>


              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">

                    <a class="nav-link" href="leitorsf.php">
                        <i class="fas fa-box-open"></i>
                        <span>São Francisco</span></a>
                </li>

              </li>
              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item">

                    <a class="nav-link" href="leitorbm.php">
                        <i class="fas fa-box-open"></i>
                        <span>Brasília de Minas</span></a>
                </li>

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
          <div class="sidebar-heading">
              Cadastros de Usuários
          </div>
          <li class="nav-item">
              <a class="nav-link" href="usuario.php">
                  <i class="fas fa-baby"></i>
                  <span>Cadastrar Usuários</span></a>

           </li>
           <li class="nav-item">
               <a class="nav-link" href="listarusuario.php">
                 <i class="fas fa-address-card"></i>

                   <span>Listar Usuários</span></a>
            </li>

            <div class="sidebar-heading">
                Compras Por Marcas
            </div>
            <li class="nav-item">
                <a class="nav-link" href="marcasjn.php">
                    <i class="far fa-address-book"></i>
                    <span>Januária</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="marcassf.php">
                     <i class="far fa-address-book"></i>
                     <span>São Francisco</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="marcasbm.php">
                      <i class="far fa-address-book"></i>
                      <span>Brasília</span></a>
               </li>

               <li class="nav-item">

                     <a class="nav-link" href="importar.php">
                         <i class="fas fa-fw fa-table"></i>
                         <span>Importar Dados</span></a>
                 </li>
          <div class="sidebar-heading">
              Balanceamento
          </div>
          <li class="nav-item">
              <a class="nav-link" href="sugestao.php">
                  <i class="fas fa-baby-carriage"></i>
                  <span>Retirar Januária</span></a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="sugestaosf.php">
                   <i class="fas fa-baby-carriage"></i>
                   <span>Retirar São Francisco</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sugestaobm.php">
                    <i class="fas fa-baby-carriage"></i>
                    <span>Retirar Brasília</span></a>
             </li>

             <li class="nav-item">

                   <a class="nav-link" href="importar.php">
                       <i class="fas fa-fw fa-table"></i>
                       <span>Importar Dados</span></a>
               </li>



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

                      <a class="nav-link" href="leitorjn.php">
                         <i class="fas fa-box-open"></i>
                          <span>Januária</span></a>
                  </li>


                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">

                      <a class="nav-link" href="leitorsf.php">
                          <i class="fas fa-box-open"></i>
                          <span>São Francisco</span></a>
                  </li>

                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">

                      <a class="nav-link" href="leitorbm.php">
                          <i class="fas fa-box-open"></i>
                          <span>Brasília de Minas</span></a>
                  </li>

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
                                      echo $_SESSION['Nome'];
                                  ?>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1>Emílio</h1>

            <!-- Estilo dos botoes-->
            <style>
                .pequeno {
                   width: 20%;
                 }

               .medio {
                   width: 100%;
               }
             </style>



                    </div>
                    <table id="tabela" class="table table-striped table-bordered table-condensed table-hover">

                        <tr>
                              <th colspan="4"><center>Compras Emílio</center>
                              </th>
                        </tr>
                        <tr>
                          <td><a href="emiliojn.php"><button type="button" class="btn btn-primary medio">Loja Januária</button></a></td>
                          <td><a href="emiliosf.php"><button type="button" class="btn btn-primary medio">Loja São Francisco</button></a></td>
                          <td><a href="emiliobm.php"><button type="button" class="btn btn-primary medio">Loja Brasília de Minas</button></a></td>

                        </tr>

                    </table>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->

                                        </div>

                                    </div>
                                </div>
                            </div>



                    </div>

                    <!-- Content Row -->





                    <div class="row">



                    <div class="row">



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Cantinho  2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair do Sistema?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja Realmente Sair do Sistema?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
                    <a class="btn btn-primary" href="logout.php">Sim</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

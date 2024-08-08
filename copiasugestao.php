<?php
if(!isset($_SESSION)){
        session_start();
      }

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
                <div class="sidebar-brand-text mx-3">Cantinho Compras <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

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
                Compras
            </div>
            <li class="nav-item">
                <a class="nav-link" href="sugestao.php">
                    <i class="fas fa-baby-carriage"></i>
                    <span>Sugestão de Compras</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="sugestaogrupos.php">
                     <i class="fas fa-comment"></i>
                     <span>Sugestão Por Grupos</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="sugestaomarcas.php">
                      <i class="fas fa-fw fa-chart-area"></i>
                      <span>Sugestão de Marcas</span></a>
               </li>
               <li class="nav-item">

                     <a class="nav-link" href="importar.php">
                         <i class="fas fa-fw fa-table"></i>
                         <span>Importar Dados</span></a>
                 </li>

            <div class="sidebar-heading">
                Estoque Mínino e Máximo
            </div>
            <li class="nav-item">

                  <a class="nav-link" href="estprodutos.php">
                      <i class="fas fa-fw fa-table"></i>
                      <span>Por Produtos</span></a>
              </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">

                  <a class="nav-link" href="estgrupos.php">
                      <i class="fas fa-fw fa-table"></i>
                      <span>Por Grupos</span></a>
              </li>

            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">

                  <a class="nav-link" href="estmarcas.php">
                      <i class="fas fa-fw fa-table"></i>
                      <span>Por Marcas</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
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
                        <h1 class="h3 mb-0 text-gray-800">Sugestão de Compras</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row col-xs-1">



                    <br/>
<br/>
<div class="form-group col-xs-1">
<form action='sugestao.php' method='post' name="formgrupo">

    <label for="inputPassword2" class="sr-only">Codigo</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="Codigo" name="buscar">

</div>
<div class="form-group col-xs-1">
  <h1 class="h3 mb-0 text-gray-800">  - </h1>
</div>
<div class="form-group col-xs-4" >
  <input type="submit" class="btn btn-primary" value="Buscar"/ >
</form>
</div>
<br/><br/>
<div class="form-group col-xs-1">
  <h1 class="h3 mb-0 text-gray-800">  - </h1>
</div>
<div class="form-group col-xs-6" >
<form action="excel.php" method="post" enctype="multipart/form-data" >
  <input type="submit" class="btn btn-primary" value="Gerar Excel"/>
  <input type="button" class="btn btn-primary" value="Salvar/Imprimir" onClick="window.print()"/>
</form>
</div><br/><br/>


      <?php
           $result = 0;
           $sql = "SELECT `id`, `empresa`, `codproduto`, `descproduto`, `referencia`, `estaual`, `estminino`, `estmaximo`, `difmaxest`, `unidade`, `datacompra`, `precofinal`, `fornecedor` FROM cvs";
           $result = mysqli_query($con, $sql);
           $_POST["buscar"] == 0;
           if ($_POST["buscar"] == 0){

                        #$jn = "SELECT * FROM cvs as c INNER JOIN est004 as e ON e.CODPRODUTO = c.codproduto where c.empresa = 1";
                        #$jnresult = mysqli_query($con, $jn);
                        $grupo = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.CODPRODUTO = c.codproduto and e.GRUPO = g.GRUPOCONTADOR and c.EMPRESA = 1";
                        $gruporesult = mysqli_query($con, $grupo);
                        $sf = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.CODPRODUTO = c.codproduto and e.GRUPO = g.GRUPOCONTADOR and c.EMPRESA = 2";
                        $sfresult = mysqli_query($con, $sf);
                        $bm = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.CODPRODUTO = c.codproduto and e.GRUPO = g.GRUPOCONTADOR and c.EMPRESA = 5";
                        $bmresult = mysqli_query($con, $bm);
                        #$rowsf = mysqli_fetch_assoc($sfresult);
                  }
            else {
                        $cont = $_POST["buscar"];
                        #$jn = "SELECT * FROM cvs as c INNER JOIN est004 as e ON e.CODPRODUTO = c.codproduto where e.GRUPO = $cont";
                        #$jnresult = mysqli_query($con, $jn);
                        $grupo = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.EMPRESA = 1 and c.empresa=1 and g.EMPRESA = 1 and c.codproduto = $cont and e.CODPRODUTO =  $cont";
                        $gruporesult = mysqli_query($con, $grupo);
                        $sf = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.EMPRESA = 2 and c.empresa=2 and g.EMPRESA = 2 and c.codproduto = $cont and e.CODPRODUTO =  $cont";
                        $sfresult = mysqli_query($con, $sf);
                        $bm = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.EMPRESA = 5 and c.empresa=5 and g.EMPRESA = 5 and c.codproduto = $cont and e.CODPRODUTO =  $cont";
                        $bmresult = mysqli_query($con, $bm);
                        #$rowsf = mysqli_fetch_assoc($sfresult);


                      }




            #$rowsf = mysqli_fetch_assoc($sfresult);

            $produtos = "SELECT `ID`, `EMPRESA`, `CODPRODUTO`, `CONTAPRODUTO`, `DESCPRODUTO`, `GRUPO`, `SUBGRUPO`, `MARCA`, `ESTMINIMO`, `ESTMAXIMO` FROM `est004` WHERE EMPRESA = 1";
            $produtosresult = mysqli_query($con, $produtos);


            if($sql === FALSE) {
                  // Consulta falhou, parar aqui
                  die(mysqli_error());
              }
      ?>
          <table class="table table-striped table-bordered table-condensed table-hover">
            <tr class="table-primary">
              <th>Empresa</th>
              <th>Cód</th>
              <th>Desc</th>
              <th>Grupo</th>
              <th>Estoque Atual</th>
              <th>Estoque Maximo</th>
              <th>Sugestão</th>
              <th>Ultimo Pedido</th>

            </tr>

      <?php

                 while($rowgrupo = mysqli_fetch_assoc($gruporesult)) {
                  $rowsf = mysqli_fetch_assoc($sfresult);
                  $rowbm = mysqli_fetch_assoc($bmresult);

                  echo "<tr >";
                  echo "<td>" .$rowgrupo['empresa'];"</td>";
                  echo "<td>" .$rowgrupo['codproduto'];"</td>";
                  echo "<td>" .$rowgrupo['descproduto'];"</td>";
                  echo "<td>" .$rowgrupo['DESCGRUPO'];"</td>";
                  echo "<td>" .$rowgrupo['estaual'];"</td>";
                  echo "<td>" .$rowgrupo['estmaximo'];"</td>";
                  echo "<td>" .$rowgrupo['difmaxest'];"</td>";
                  echo "<td>" .$rowgrupo['datacompra'];"</td>";
                  echo "<td>" .$rowgrupo['datacompra'];"</td>";




                  #=SE(E(H74<0;I74>0;H74*-1>I74);I74;SE(E(H74<0;I74>0;H74*-1<=I74);-1*H74;"-"))
                  #echo "<td>" .$rowsf['estmaximo'];"</td>";
                  #echo "<td>" .$rowbm['estmaximo'];"</td>";
                }

         ?>
</table>


</div>
                          </div>
                            </div>

<div class="container my-auto">
    <div class="copyright text-center my-auto">
<form action="excel.php" method="post" enctype="multipart/form-data" >
  <input type="submit" class="btn btn-primary" value="Gerar Excel"/>


<input type="button" class="btn btn-primary" value="Salvar" onClick="window.print()"/>
</form>
</div>
</div>


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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

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
                        <h1 class="h3 mb-0 text-gray-800">Sugestão de Compras Por Grupos</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row col-xs-1">



                    <br/>
<br/>
<div class="form-group col-xs-1">
<form action='sugestao.php' method='post' name="formgrupo">
  <select name="grupo" class="form-control"   required>

    <option value="" selected disabled required>GRUPOS</option>

  <?php
    $getgrupos = "SELECT `ID`, `EMPRESA`, `GRUPOCONTADOR`, `DESCGRUPO` FROM est002 where EMPRESA = 1 order by DESCGRUPO ";
    $queryresult = mysqli_query($con, $getgrupos);
    while($querygrupos = mysqli_fetch_assoc($queryresult)) {
            $todosgrupos = $querygrupos['DESCGRUPO'];
            $idgrupos = $querygrupos['GRUPOCONTADOR'];
            echo "  <option value='$idgrupos'>$todosgrupos</option>";
               }
            $cont = $_POST["grupo"];

        ?>


</select>


</div>
<div class="form-group col-xs-1">
  <h1 class="h3 mb-0 text-gray-800">  - </h1>
</div>
<div class="form-group col-xs-4" >
  <input type="submit" class="btn btn-primary" value="Buscar"/>
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
          #  $grupos = $_POST["grupo"];
            $sql = "SELECT `id`, `empresa`, `codproduto`, `descproduto`, `referencia`, `estaual`, `estminino`, `estmaximo`, `difmaxest`, `unidade`, `datacompra`, `precofinal`, `fornecedor` FROM cvs";
            $result = mysqli_query($con, $sql);

            if ($cont == false){
                        #$jn = "SELECT * FROM cvs as c INNER JOIN est004 as e ON e.CODPRODUTO = c.codproduto where c.empresa = 1";
                        #$jnresult = mysqli_query($con, $jn);
                        $grupo = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.CODPRODUTO = c.codproduto and e.GRUPO = g.GRUPOCONTADOR and c.EMPRESA = 1";
                        $gruporesult = mysqli_query($con, $grupo);

                  }
            else {
                        #$jn = "SELECT * FROM cvs as c INNER JOIN est004 as e ON e.CODPRODUTO = c.codproduto where e.GRUPO = $cont";
                        #$jnresult = mysqli_query($con, $jn);
                        $grupo = "SELECT * FROM est002 as g INNER JOIN est004 as e ON e.GRUPO = g.GRUPOCONTADOR inner join cvs as c ON e.CODPRODUTO = c.codproduto where e.CODPRODUTO = c.codproduto and e.GRUPO = g.GRUPOCONTADOR and c.EMPRESA = 1 and e.GRUPO = $cont";
                        $gruporesult = mysqli_query($con, $grupo);


                      }

            $sf = "SELECT `id`, `empresa`, `codproduto`, `descproduto`, `referencia`, `estaual`, `estminino`, `estmaximo`, `difmaxest`, `unidade`, `datacompra`, `precofinal`, `fornecedor` FROM cvs where empresa = 2 ";
            $sfresult = mysqli_query($con, $sf);
            #$rowsf = mysqli_fetch_assoc($sfresult);

            $bm = "SELECT `id`, `empresa`, `codproduto`, `descproduto`, `referencia`, `estaual`, `estminino`, `estmaximo`, `difmaxest`, `unidade`, `datacompra`, `precofinal`, `fornecedor` FROM cvs where empresa = 5";
            $bmresult = mysqli_query($con, $bm);
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

              <th>Cód</th>
              <th>Desc</th>
              <th>Gp</th>
              <th>JN E Atual</th>
              <th>SF E Atual</th>
              <th>BM E Atual</th>
              <th></th>
              <th>JN E Min</th>
              <th>SF E Min</th>
              <th>BM E Min</th>
              <th>-</th>
              <th>JN Est Max</th>
              <th>SF E Max</th>
              <th>BM E Max</th>
            </tr>

      <?php

                 while($rowgrupo = mysqli_fetch_assoc($gruporesult)) {
                  $rowsf = mysqli_fetch_assoc($sfresult);
                  $rowbm = mysqli_fetch_assoc($bmresult);

                  echo "<tr >";
                  echo "<td>" .$rowgrupo['codproduto'];"</td>";
                  echo "<td>" .$rowgrupo['descproduto'];"</td>";
                  echo "<td>" .$rowgrupo['DESCGRUPO'];"</td>";
                  echo "<td>" .$rowgrupo['estaual'];"</td>";
                  echo "<td>" .$rowsf['estaual'];"</td>";
                  echo "<td>" .$rowbm['estaual'];"</td>";
                  echo "<td></td>";
                  echo "<td>" .$rowgrupo['estminino'];"</td>";
                  echo "<td>" .$rowsf['estminino'];"</td>";
                  echo "<td>" .$rowbm['estminino'];"</td>";
                  echo "<td>-</td>";
                  echo "<td>" .$rowgrupo['estmaximo'];"</td>";
                  echo "<td>" .$rowsf['estmaximo'];"</td>";
                  echo "<td>" .$rowbm['estmaximo'];"</td>";
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
                        <span>Copyright &copy; Cantinho  2021</span>
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

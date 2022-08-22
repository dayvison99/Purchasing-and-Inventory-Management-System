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

    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

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
                    <i class="fas fa-address-card"></i>
                    <span>Cadastrar Usuários</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="listarusuario.php">
                   <i class="fas fa-file-medical"></i>

                     <span>Alterar Usuários</span></a>
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
                  Conferências
              </div>
              <li class="nav-item">

                    <a class="nav-link" href="importarTransferencia.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Conferir Transferencia</span></a>
                </li>
                <li class="nav-item">

                      <a class="nav-link" href="importarEntrada.php">
                          <i class="fas fa-fw fa-table"></i>
                          <span>Conferir Entradas</span></a>
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

        <?php
}
        ?>

        <!--menu com permissão  estoque lojas -->
    <?php
      if ($_SESSION['permissao'] == "supervisor"){?>
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
                Conferências
            </div>
            <li class="nav-item">

                  <a class="nav-link" href="importarTransferencia.php">
                      <i class="fas fa-fw fa-table"></i>
                      <span>Conferir Transferencia</span></a>
              </li>
              <li class="nav-item">

                    <a class="nav-link" href="importarEntrada.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Conferir Entradas</span></a>
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
                  Conferências
              </div>
              <li class="nav-item">

                    <a class="nav-link" href="importarTransferencia.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Conferir Transferencia</span></a>
                </li>
                <li class="nav-item">

                      <a class="nav-link" href="importarEntrada.php">
                          <i class="fas fa-fw fa-table"></i>
                          <span>Conferir Entradas</span></a>
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
</div>
      <?php
          $sf = "SELECT * FROM cvs2 where empresa = 2 and estaual > estminino order by descproduto ";
        #  $sf = "SELECT * FROM cvs as j INNER JOIN cvs2 as s ON s.codproduto = j.codproduto where s.estaual > s.estminino order by j.descproduto";
          $sfresult = mysqli_query($con, $sf);

          $jn = "SELECT * FROM cvs2 as s INNER JOIN cvs as j ON s.codproduto = j.codproduto where s.estaual > s.estminino order by s.descproduto";
          $jnresult = mysqli_query($con, $jn);

          $bm = "SELECT * FROM cvs2 as s INNER JOIN cvs3 as b ON s.codproduto = b.codproduto where s.estaual > s.estminino order by s.descproduto";
          $bmresult = mysqli_query($con, $bm);

          if($jn === FALSE) {
                  // Consulta falhou, parar aqui
                  die(mysqli_error());
          }

          if($bm === FALSE) {
                  // Consulta falhou, parar aqui
                  die(mysqli_error());
          }

          if($sf === FALSE) {
                  // Consulta falhou, parar aqui
                  die(mysqli_error());
          }
      ?>

      <div class="jumbotron"><center>

        <legend class="legend-border"><h4> Balanceamento Saíndo de São Francisco </h4></legend>
        <form action="" method="post" class="form">
          <div class="form-group input-group col-xs-7" >
              Digite o Código do Produto
          </div>
          <div class="form-group input-group col-xs-7">

             <table id="tabela" class="table table-striped table-bordered table-condensed table-hover">
               <tr>
                 <th width="20%"><input autofocus name="nome" id="nome" placeholder="Código do Produto" type="text" class="form-control"></th>
               </th>
            </table>
          </div>

          <div class="form-group input-group col-xs-7">

          </div>

          <table id="tabela" class="table table-striped table-bordered table-condensed table-hover" title="Balanceamento!">
             <tr >
              <th>Cód</th>
              <th>Descrição</th>
              <th>Excendentes SF</th>
              <th><a href="imprimirsf-jn.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-danger">Para JN</button></a></li></th>
              <th><a href="imprimirsf-bm.php" id="bm"><i class="ion-help"></i> <button type="button" class="btn btn-success">Para BM</button></a></li></th>
          </tr>
      <?php
               while($rowjn = mysqli_fetch_assoc($jnresult)) {

                  $rowsf = mysqli_fetch_assoc($sfresult);
                  $rowbm = mysqli_fetch_assoc($bmresult);
                  $difjn = $rowjn['estaual']-$rowjn['estminino'];
                  $difsf = $rowsf['estaual']-$rowsf['estminino'];
                  $difbm = $rowbm['estaual']-$rowbm['estminino'];

                  #cabecario sf
                  echo "<tr >";
                  echo "<td>" .$rowsf['codproduto'];"</td>";
                  echo "<td>" .$rowsf['descproduto'];"</td>";


                  #se estoque de atual de SF for maior que o estoque minino
                  if ($rowsf['estaual'] > $rowsf['estminino']){
                    echo "<td>" .$difsf;"</td>";


                  }
                  else{
                    echo "<td>-</td>";
                  }

                  #se estoque de atual de SF for maior que o estoque minino e estoque de jn atual for menor qu o minino
                  if ($rowjn['estaual'] < $rowjn['estminino'] and $rowsf['estaual'] > $rowsf['estminino']){
                        if ($difsf >= $rowjn['estminino'] - $rowjn['estaual']){
                            echo "<td>" .($rowjn['estminino'] -$rowjn['estaual']);"</td>";
                            $_SESSION['SFJN1'] = $rowjn['estminino'] -$rowjn['estaual'] ;



                            }
                        if ($difsf < $rowjn['estminino'] - $rowjn['estaual']){
                            echo "<td>" .($difsf);"</td>";
                            $_SESSION['SFJN'] = $difsf;



                          }
                    }
                   else{
                            echo "<td>-</td>";

                    }


                  #se estoque de atual de SF for maior que o estoque minino e estoque de BM atual for menor qu o minino
                    #Brasilia faltando e sf sobrando
                    if ($rowbm['estaual'] < $rowbm['estminino'] and $rowsf['estaual'] > $rowsf['estminino']){
                      #BM Faltando, SF e JN sobrando
                        if ($difsf >= $rowbm['estminino'] - $rowbm['estaual'] and $rowjn['estaual'] >=  $rowjn['estminino'] ){
                            echo "<td>" .($rowbm['estminino'] -$rowbm['estaual']);"</td>";
                            }

                        if ($difsf >= $rowbm['estminino'] - $rowbm['estaual'] and $rowjn['estaual'] < $rowjn['estminino'] ){
                              if($difsf - ($rowjn['estminino'] - $rowjn['estaual']) < $rowbm['estminino'] - $rowbm['estaual']  ){
                                echo "<td>" .($difsf - ($rowjn['estminino'] - $rowjn['estaual']));"<td>";
                                  }
                            }
                        if ($difsf < $rowbm['estminino'] - $rowbm['estaual'] and $rowjn['estaual'] < $rowjn['estminino']){
                            if($rowsf['estaual'] - $rowsf['estminino']> $rowbm['estminino'] - $rowbm['estaual'] -$difsf){
                            echo "<td>" .(($rowbm['estminino'] - $rowbm['estaual']) -$difjn);"<td>";
                            echo "bg";

                          }

                            }
                        if ($difsf > $rowbm['estminino'] - $rowbm['estaual'] and $rowjn['estaual'] >= $rowjn['estminino']){
                                  echo "fsdf";

                        }

                        }
                        else{
                            echo "<td>-</td>";

                        }
                      if ($rowbm['estaual'] < $rowbm['estminino'] and $rowsf['estaual'] < $rowsf['estminino'] and $rowjn['estaual'] > $rowjn['estminino']){
                        if ($difjn <= $rowsf['estminino'] - $rowsf['estaual']){
                            echo "<td>-</td>";
                            }
                        if ($difjn > $rowsf['estminino'] - $rowsf['estaual']){
                            if ($difjn-($rowsf['estminino'] - $rowsf['estaual']) >=$rowbm['estminino'] -$rowbm['estaual']){
                                echo "<td>" .($rowbm['estminino'] -$rowbm['estaual']);"</td>";
                                  }
                            if ($difjn-($rowsf['estminino'] - $rowsf['estaual']) <$rowbm['estminino'] -$rowbm['estaual']){
                                  echo "<td>" .($difjn-($rowsf['estminino'] - $rowsf['estaual']));"</td>";

                                  }
                                }
                              }
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
                    <a class="btn btn-primary" href="index.php">Sim</a>
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

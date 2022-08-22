<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
      <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Media</h1>

                    </div>

                    <!-- Content Row -->


                    <?php
                                    $result = "SELECT * FROM cantinho.est006 where empresa = 1 and produto <50 order by regstamp desc";
                                    $queryresult = mysqli_query($con, $result);

                                    $result2 = "SELECT * FROM cantinho.est006 where empresa = 1 and produto <50 order by regstamp desc";
                                    $queryresult2 = mysqli_query($con, $result2);
                    ?>

                    <table class="table table-striped table-bordered table-condensed table-hover">
                      <tr border="1">

                            <th colspan="2"><center>Dados do Produto</center></th>
                            <th colspan="1"><center>Leitor</center></th>

                            <th colspan="2"><center>Sistema</center></th>
                            <th colspan="1"><center>Erros</center></th>
                      </tr>
                        <tr class="">
                              <th>id</th>
                              <th>Cód</th>
                              <th>Entrou</th>
                              <th>Data Entrada</th>
                              <th>Cód</th>

                              <th>QTDE</th>

                              <th colspan="1">Diferença</th>

                        </tr>
                  <?php

                          while($aux = mysqli_fetch_assoc($queryresult2)){
                              $auxdata = $aux['regstamp'];
                              echo "<br/>";
                              echo "a".$aux['produto'];
                              echo "<br/>";
                              while($row = mysqli_fetch_assoc($queryresult)) {
                                if( $aux['produto'] == $row['produto'] and $aux['regstamp'] > $row['regstamp']){
                                      echo $aux['regstamp'];
                                      echo "<br/>";
                                      echo $row['regstamp'];
                                      echo "<br/>";
                                      echo $row['produto'];
                                      echo "<tr >";
                                        echo "<td>" .$row['id'];"</td>";
                                      echo "<td>" .$row['produto'];"</td>";
                                      echo "<td>" .$row['qtde'];"</td>";


                                      echo "<td>" .$row['regstamp'];"</td>";

                                      echo "<td></td>";

                                      $data = $aux['regstamp'];
                                      $id = $row['id'];
                                      $alter = "UPDATE est006 set dataanterior =  $data  where id = $id";
                                      $inserir = mysqli_query($con, $alter );

                                    #  echo "<td>" .$row['lqtde']/1;"</td>";
                                    break;
                                    }

                                  }
                                    $result = "SELECT * FROM cantinho.est006 where empresa = 1 and produto <50 order by regstamp desc";
                                    $queryresult = mysqli_query($con, $result);

                                  }
?>
                    <!-- Content Row -->



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

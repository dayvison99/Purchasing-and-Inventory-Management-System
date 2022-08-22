<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5>Itens da Conferência</h5>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->

                                        </div>

                                        <?php
                                            if (isset($_GET['tmpString'])){
                                                $tmpString = $_GET['tmpString'];
                                                $_SESSION["idconferencia"] = $tmpString;

                                              }
                                            else
                                                 $tmpString = null;

                                             $sql = "SELECT * FROM salvarconferenciaprodutos where idconferencia = $tmpString group by codsistema";
                                             $result = mysqli_query($con, $sql);



                                              if($sql === FALSE) {
                                                    // Consulta falhou, parar aqui
                                                    die(mysqli_error());
                                                }


                                        ?>
                                        <table id="tabela" class="table table-striped table-bordered table-condensed table-hover">
                                          <tr>
                                              <th colspan="4"><center>Filtros: Digite No Campo a informação que deseja!</center></th>
                                          </tr>
                                          <tr>
                                            <th width="20%"><input autofocus name="nome" id="nome" placeholder="COD" type="text" class="form-control"></th>
                                            <th width="20%"><input autofocus name="nome" id="nome1" placeholder="DESCRIÇÃO" type="text" class="form-control"></th>
                                            <th width="20%"><center><b>  <a href="listarconferencia.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Voltar</button></a></li></b></center></th>

                                          </th>
                                       </table>
                                     </div>

                                     <div class="form-group input-group col-xs-7">

                                     </div>

                                     <table id="tabela" class="table table-striped table-bordered table-condensed table-hover" title="Balanceamento!">
                                        <tr >
                                              <tr >


                                                <th>COD SISTEMA</th>
                                                <th>DESCRIÇÃO</th>
                                                <th>QTDE SISTEMA</th>
                                                <th>-</th>
                                                <th>QTDE LIDA</th>
                                                <th>STATUS</th>




                                              </tr>

                                        <?php


                                                    while($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<td>" .$row['codsistema'];"</td>";
                                                    echo "<td>" .$row['descrisistema'];"</td>";
                                                    echo "<td>" .$row['quantidadesistema'];"</td>";
                                                    echo "<td>-</td>";
                                                    echo "<td>" .$row['quantidadesleitor'];"</td>";
                                                    echo "<td>" .$row['erros'];"</td>";
                                                    #echo "<td>" .$row['leitor'];"</td>";
                                                    #echo "<td>" .$row['diferenca'];"</td>";
                                                    #$$porcentagem = round(($row['leitor']/$row['sistema'])*100,2)." %";
                                                    #echo "<td>" .$row['porcentagem']." %";"</td>";

                                                  }

                                                  #<a href="test.php?tmpString=Teste">link teste</a>
                                           ?>

                                  </table>
                                    </div>
                                </div>
                            </div>



                    </div>

                    <!-- Content Row -->




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

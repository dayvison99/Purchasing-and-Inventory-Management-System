<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5>Listagem de Conferências</h5>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->

                                        </div>
                                        <?php

                                             $sql = "SELECT * FROM salvarconferencia order by substr(data,7,4) desc,substr(data,1,2) desc ";
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
                                            <th width="20%"><input autofocus name="nome" id="nome" placeholder="Grupo" type="text" class="form-control"></th>
                                            <th width="20%">
                                              <select autofocus name="nome1" id="nome1" placeholder="Cidade" type="text" class="form-control" value="aa">
                                                        <option disabled selected></option>
                                                          <?php   $query = $con->query("SELECT * FROM empresa order by CIDADE");
                                                              while($reg = $query->fetch_array())
                                                              {
                                                                  echo '<option value="'.$reg["CIDADE"].'">'.$reg["CIDADE"].'</option>';
                                                              }
                                                          ?>
                                                </select>
                                            </th>
                                            <th width="20%"><input autofocus name="nome" id="nome2" placeholder="Responsavel" type="text" class="form-control"></th>
                                            <th width="20%"><input type="date" value="date" autofocus name="nome" id="nome3" placeholder="Data" type="text" class="form-control"></th>

                                          </th>
                                       </table>
                                     </div>

                                     <div class="form-group input-group col-xs-7">

                                     </div>

                                     <table id="tabela" class="table table-striped table-bordered table-condensed table-hover" title="CONFERÊNCIAS!">
                                        <tr >
                                              <tr >


                                                <th>Grupo</th>
                                                <th>Loja</th>
                                                <th>Responsável</th>
                                                <th>Data Conferência</th>
                                                <th>Qtde Sistema</th>
                                                <th>Qtde Lida</th>
                                                <th>Diferença</th>
                                                <th>Encontrados( % )</th>




                                              </tr>

                                        <?php

                                                    while($row = mysqli_fetch_assoc($result)) {
                                                    $itens = $row['id'];
                                                    $link_address = "listarconferenciaitens.php?tmpString=$itens";
                                                    echo "<tr>";
                                                    #echo "<td>" .$row['id'];"</td>";
                                                    echo "<td>" .$row['grupo'];"</td>";
                                                    echo "<td>" .$row['cidade'];"</td>";
                                                    echo "<td>" .$row['usuario'];"</td>";
                                                    $date = $row['data'];
                                                    $date = str_replace("/", "-", $date);
                                                    echo "<td>" .date("d-m-Y", strtotime($date));"</td>";
                                                    echo "<td>" .$row['sistema'];"</td>";
                                                    echo "<td>" .$row['leitor'];"</td>";
                                                    echo "<td>" .$row['diferenca'];"</td>";
                                                    #$$porcentagem = round(($row['leitor']/$row['sistema'])*100,2)." %";
                                                    echo "<td>" .$row['porcentagem']." %";"</td>";
                                                    echo "<td><a href='".$link_address."'> + detalhes </a></td>";

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

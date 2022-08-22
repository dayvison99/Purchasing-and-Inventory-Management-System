<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h4>Brasília</h4>
                    </div>
                    <?php
                          echo "Atualizado em : ";
                          echo $_SESSION['data'];
                          ?>
                        <p/>

            <!-- Estilo dos botoes-->
            <style>
                .pequeno {
                   width: 20%;
                 }

               .medio {
                   width: 100%;
               }
             </style>




                    <table id="tabela" class="table table-striped table-bordered table-condensed table-hover">
                      <tr>
                            <th colspan="4"><center><h4><i>Compras Por Marcas Loja Brasília</i></h4></center>
                            </th>
                      </tr>
                      <tr>
                        <td>
                          <form class="form-signin" method="POST" action="emiliobm.php" >
                          <div class="form-group">
                          <label for="exampleFormControlSelect1">Selecione a Marca</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="marca" required>
                                          <option disabled selected></option>
                                    <?php

                                          $query = $con->query("SELECT * FROM est017 where empresa = 1 order by DESCMARCA");
                                          while($reg = $query->fetch_array())
                                          {
                                              echo '<option value="'.$reg["MARCACONTADOR"].'">'.$reg["DESCMARCA"].'</option>';
                                          }
                                    ?>
                                  </select>

                          </div>

                        </td>
                        <tr>
                        <th><button class="btn btn btn-primary btn-block" type="submit">Selecionar Marca</button></th>
                      </tr>
                      </form>
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

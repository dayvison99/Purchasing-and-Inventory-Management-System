<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5>Novos Dados</h5>
                    </div>

                    <!-- Content Row -->


                    <?php
                        include_once("conexao.php");
                        $excluir = "DELETE FROM `leitorconferenciabm`";
                        $queryexcluir = mysqli_query($con, $excluir);
                        $result2 = "DELETE FROM `estatual`";
                        $queryresult = mysqli_query($con, $result2);
                        if ($queryexcluir){
                                    $zerar1 = "ALTER TABLE `leitorconferenciabm` AUTO_INCREMENT=1";
                                    $queryresult = mysqli_query($con, $zerar1);
                                    $zerar = "ALTER TABLE `estatual` AUTO_INCREMENT=1";
                                    $queryresult = mysqli_query($con, $zerar);
                                    #echo "Dados Excluídos com Sucesso";

                        }else{
                                    echo "Erro na exclusão";
                            }


                      ?>

                        <br/>
                        <br/>
                        <br/>
                        <form action="conferenciadadosbm.php" method="post" enctype="multipart/form-data" >
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Escolha seu arquivo (txt)</label>
                            <input type="file" class="form-control-file" name="arquivo"  required>
                          </div>
                           <button type="submit" class="btn btn-primary">Enviar</button>

                        </form>





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

<?php

    require("layout/menu.php");

    $host = "localhost";
    $db   = "estmimemax";
    $user = "root";
    $pass = "secreta123";
    // conecta ao banco de dados
    $con = new mysqli($host, $user, $pass,$db) or trigger_error(mysql_error(),E_USER_ERROR);

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Importar Arquivo</h1>

                    </div>

                    <!-- Content Row -->


                    <?php
                        $host = "localhost";
                        $db   = "estmimemax";
                        $user = "root";
                        $pass = "secreta123";
                        // conecta ao banco de dados
                        $con = new mysqli($host, $user, $pass,$db) or trigger_error(mysql_error(),E_USER_ERROR);

                      #  $recebido = $_POST["arquivo"];

                        $nome = $_FILES['arquivo']['name'];
                        $tmp_name = $_FILES['arquivo']['tmp_name'];

                        $ext = explode(".",$nome);
                        $extensao = end($ext);



                        if($extensao !="txt"){
                              echo " Extensão Inválida";
                            }
                            else{
                               $recebido = fopen($tmp_name, 'r');

                                while(($dados = fgetcsv($recebido,1000, ",")) !== FALSE){

                                  $c1= utf8_encode($dados[0]);
                                  $c2 = utf8_encode($dados[1]);
                                  $c3 = utf8_encode($dados[2]);
                                  $c4 = utf8_encode($dados[3]);
                                  $c5 = utf8_encode($dados[4]);
                                  $c6 = utf8_encode($dados[5]);
                                  $c7 = utf8_encode($dados[6]);
                                  $c8 = utf8_encode($dados[7]);
                                  $c9 = utf8_encode($dados[8]);
                                  $c10 = utf8_encode($dados[9]);
                                  $c11 = utf8_encode($dados[10]);
                                  $c12= utf8_encode($dados[11]);
                                  $c13 = utf8_encode($dados[12]);
                                  $c14 = utf8_encode($dados[13]);
                                #  $c15 = utf8_encode($dados[14]);

                                  $result = "INSERT INTO vendasprodutos2(`Descricao`,`Unid`,`out_2019`,`nov_2019`,`dez_2019`,`jan_2020`,`fev_2020`,`mar_2020`,`abr_2020`,`mai_2020`,`jun_2020`,`jul_2020`,`ago_2020`,`set_2020`) VALUES ('$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14')";
                                  $queryresult = mysqli_query($con, $result);
                                   }

                                 if($queryresult){
                                      echo "Dados Atualizados com sucesso";
                                  }else{
                                      echo "Erro na atualização";
                                  }

                            }
                      ?>

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

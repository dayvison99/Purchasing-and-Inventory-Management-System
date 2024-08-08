<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Importar Arquivo</h1>

                    </div>

                    <!-- Content Row -->


                    <?php
                        include_once("conexao.php");

                      #  $recebido = $_POST["arquivo"];

                        $nome = $_FILES['arquivo']['name'];
                        $tmp_name = $_FILES['arquivo']['tmp_name'];

                        $ext = explode(".",$nome);
                        $extensao = end($ext);

                        if($extensao !="txt"){

                              $PHPtext = $_SESSION['Nome'].", Você importou uma Extensão Inválida ".$extensao." precisa ser TXT, Refaça a importação";
                        ?>
                          <script type="text/javascript">
                            var JavaScriptAlert = <?php echo json_encode($PHPtext); ?>;
                            alert(JavaScriptAlert); // Your PHP alert!
                          </script>
                        <?php
                            return;// echo " Extensão Inválida";
                            }
                            else{
                               $recebido = fopen($tmp_name, 'r');

                                while(($dados = fgetcsv($recebido,1000, ",")) !== FALSE)
                                {
                                $vazio = utf8_encode($dados[0]);

                                  if (is_numeric($vazio)) {

                                  $codproduto = utf8_encode($dados[0]);
                                  $nome = utf8_encode($dados[1]);
                                  $marca = utf8_encode($dados[2]);
                                  $quantidadeSaida = utf8_encode($dados[4]);
                                  $quantidadeEntrada = utf8_encode($dados[3]);


                                  if ($_SESSION['empresa'] == "1")
                                      $result = "INSERT INTO transferenciajn(`codproduto`, `nome`, `marca`, `quantidadeSaida`, `quantidadeEntrada`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada')";
                                  if ($_SESSION['empresa'] == "2")
                                      $result = "INSERT INTO transferenciasf(`codproduto`, `nome`, `marca`, `quantidadeSaida`, `quantidadeEntrada`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada')";
                                  if ($_SESSION['empresa'] == "5")
                                      $result = "INSERT INTO transferenciabm(`codproduto`, `nome`, `marca`, `quantidadeSaida`, `quantidadeEntrada`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada')";
                                  if ($_SESSION['empresa'] == "6")
                                      $result = "INSERT INTO transferenciamaimai(`codproduto`, `nome`, `marca`, `quantidadeSaida`, `quantidadeEntrada`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada')";

                                  $queryresult = mysqli_query($con, $result);

                                  }
                                }
                                  if (isset($queryresult)){
                                      echo "Dados Atualizados com Sucesso";

                                  }else{
                                      echo "Erro na atualização";
                                  }


                            }
                      ?>

                    <!-- Content Row -->
                    <div class="row">
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                      <label for="exampleFormControlFile1">Click em Conferir para Lançar os Produtos da Tranferência</label></br>
                    </div>
                    <div class="row">
                      <a href="transferencia.php" value="Conferir"><button type="submit" class="btn btn-primary">Conferir</button></a>
                    </div>

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

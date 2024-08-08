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
                              return;
                            }
                            else{
                               $recebido = fopen($tmp_name, 'r');

                                while(($dados = fgetcsv($recebido,1000, ",")) !== FALSE)
                                {
                                  $vazio = utf8_encode($dados[0]);

                                  if ($vazio == 'ï»¿2')
                                      $vazio = substr($vazio,6,7);
                                  if ($vazio == 1 or $vazio ==2 or $vazio ==5){

                                  $empresa =$vazio;
                                  $codproduto = utf8_encode($dados[1]);
                                  $descproduto = utf8_encode($dados[2]);
                                  $referencia = utf8_encode($dados[3]);
                                  $estaual = utf8_encode($dados[4]);
                                  $estminino = utf8_encode($dados[5]);
                                  $estmaximo = utf8_encode($dados[6]);
                                  $difmaxest = utf8_encode($dados[7]);
                                  $unidade = utf8_encode($dados[8]);
                                  $datacompra = utf8_encode($dados[9]);

                                  if (isset($dados[10])) {
                                      $precofinal = utf8_encode($dados[10]);
                                  } else {
                                      $precofinal = 0;
                                  }


                                  // if (!isset($dados[10]) && $dados[10] != '') {
                                  //   $precofinal = utf8_encode($dados[10]) != '' || utf8_encode($dados[10]) != null  ? utf8_encode($dados[10]) : '';
                                  // }

                                  if($estaual == '')
                                    $estaual = 0 ;
                                  if($estminino == '')
                                    $estminino = 0 ;
                                  if($estmaximo == '')
                                    $estmaximo = 0 ;
                                  if($difmaxest == '')
                                    $difmaxest = 0 ;

                                  $data_cadastro = date("d-m-Y");
                                  date('d-m-Y', strtotime('NOW()'));

                                  $dataalteracao = $data_cadastro;


                                  if ($empresa == 1){
                                    $result = "INSERT INTO cvs(`empresa`, `codproduto`, `descproduto`, `referencia`, `estaual`, `estminino`, `estmaximo`, `difmaxest`, `unidade`, `datacompra`, `precofinal`,`dataalteracao`) VALUES ('$empresa','$codproduto','$descproduto','$referencia','$estaual','$estminino','$estmaximo','$difmaxest','$unidade','$datacompra','$precofinal','$dataalteracao')";

                                  }
                                  if ($empresa == 2){
                                    $result = "INSERT INTO cvs2(`empresa`, `codproduto`, `descproduto`, `referencia`, `estaual`, `estminino`, `estmaximo`, `difmaxest`, `unidade`, `datacompra`, `precofinal`,`dataalteracao`) VALUES ('$empresa','$codproduto','$descproduto','$referencia','$estaual','$estminino','$estmaximo','$difmaxest','$unidade','$datacompra','$precofinal','$dataalteracao')";
                                    // $queryresult = mysqli_query($con, $result);
                                    // $_SESSION['data'] =  $queryresult['dataalteracao'];
                                  }
                                  if ($empresa == 5){
                                    $result = "INSERT INTO cvs3(`empresa`, `codproduto`, `descproduto`, `referencia`, `estaual`, `estminino`, `estmaximo`, `difmaxest`, `unidade`, `datacompra`, `precofinal`,`dataalteracao`) VALUES ('$empresa','$codproduto','$descproduto','$referencia','$estaual','$estminino','$estmaximo','$difmaxest','$unidade','$datacompra','$precofinal','$dataalteracao')";
                                    // $queryresult = mysqli_query($con, $result);
                                    // $_SESSION['data'] =  $queryresult['dataalteracao'];
                                  }

                                  $queryresult = mysqli_query($con, $result);
                                  $_SESSION['data'] =  $queryresult['dataalteracao'];
                                  }
                                }
                                  if ($queryresult){
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

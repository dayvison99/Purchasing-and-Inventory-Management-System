<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <div class="form-group input-group col-xs-7" >
                    Importação Para Tranferências
                  </div>

                    <center>
                      <table class="table table-striped table-bordered table-condensed table-hover">
                        <tr>
                          <td>
                          </td>
                        </tr>

                        <tr>
                              <th><div>
                                  <center><h1 class="h5 mb-0 text-gray-800">Importar Arquivo</h1>
                                    <br/>
                                  </div>
                              <div >
                                <form action="excluirTransferencia.php" method="post" enctype="multipart/form-data" >
                                    <center><label for="exampleFormControlFile1">Para fazer uma nova conferência click em <b>EXCLUIR OS DADOS</b> no botão abaixo!</label></center>
                                   <a href="#" data-toggle="modal" data-target="#myModal1" title="Excluir dados! " value="Excluir"><center><button title="Excluir Dados! " type="submit" value="Excluir" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> Excluir Dados!</span></button></center></a>
                                   </div>
                                  </center>
                                </form>
                              </th>
                          </tr>
                          <tr>
                            <td>
                            </td>
                          </tr>
                          <tr>
                          <th>
                            <form action="importarTransferencia2.php" method="post" enctype="multipart/form-data" >
                              <div class="form-group">
                                <center><label for="exampleFormControlFile1">Escolha seu arquivo que baixou do SIG (txt)</label></center>
                                <center><input type="file" class="form-control-file" name="arquivo"  required></center>
                              </div>
                                <center><button type="submit" class="btn btn-primary">Enviar</button>


                            </form>
                          </th>
                          </tr>
                          <tr>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <th ><center>  <label for="exampleFormControlFile1"><h5>Click em Conferir para Lançar os Produtos da Tranferência<h5></label></center></br>
                                <div >
                                  <center><a href="transferencia.php" value="Conferir"><button type="submit" class="btn btn-primary ">Conferir</button></a>
                                </div></center>
                            </th>
                          </tr>
                        </table>
                    </div>
                  </br>
                  </br>
                  </br>

                  <!-- Confimar ser o usuario deseja sair sem salvar-->
                              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  </button>
                                  <i class="fas fa-bell"></i>
                                  <h4 class="modal-title" id="myModalLabel">Atenção</h4>
                                </div>
                                <div class="modal-body">
                                  Certeza que deseja Excluir?</p>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-info btn-md" data-dismiss="modal"> Não </button>
                                  <a class="btn btn-info btn-md" href="excluirTransferencia.php" value="apagar"> Sim </a>
                                </div>
                              </div>
                              </div>
                              </div>
                              <!--Fim do codigo-->
                    <!-- Content Row -->




</div>
<br/>


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

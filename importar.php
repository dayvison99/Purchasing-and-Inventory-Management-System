<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5>Importar Arquivo</h5>
                    </div>
                    <div class="row">

                      <form action="excluir.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                          <label for="exampleFormControlFile1">
                            <ul>
                                <h5>Essa Importação Server Para Atualizar: </h5></p>
                                  <li>Balanceamento entre as lojas</li>
                                  <li>Compras Por Marcas</li></b> </h3>
                            </ul>

                            <br/>Para fazer uma nova Compra/Balanceamento recomendo apagar os dados antigos!</br>
                          Caso queira apenas acrescentar dados na Compra/Balanceamento atual basta importar mais dados!</label>

                        </div>

                         <a href="#" data-toggle="modal" data-target="#myModal1" title="Excluir dados! " value="Voltar"><button title="Voltar a listagem de usuários! " type="submit" value="Cadastar" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> Excluir Dados!</span></button></a>




                      </form>
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
                                  <a class="btn btn-info btn-md" href="excluir.php" value="apagar"> Sim </a>
                                </div>
                              </div>
                              </div>
                              </div>
                              <!--Fim do codigo-->
                    <!-- Content Row -->
                    <div class="row">

                      <form action="importar2.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Escolha seu arquivo (txt)</label>
                          <input type="file" class="form-control-file" name="arquivo"  required>
                        </div>
                         <button type="submit" class="btn btn-primary">Enviar</button>

                      </form>


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

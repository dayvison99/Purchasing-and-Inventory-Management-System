<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h5 mb-0 text-gray-800">Alterar Quantidade</h5>

                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                    <?php
                           if (isset($_GET['tmpString'])){
                               $tmpString = $_GET['tmpString'];

                             }
                           else
                           $tmpString = null;

                           if ($_SESSION['empresa'] == "1"){
                                   $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.id = $tmpString group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.id = $tmpString group by e.descproduto  ";
                                 }
                           if ($_SESSION['empresa'] == "2"){
                                   $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.id = $tmpString group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.id = $tmpString group by e.descproduto  ";
                                 }
                           if ($_SESSION['empresa'] == "5"){
                                   $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.id = $tmpString group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.id = $tmpString group by e.descproduto  ";
                                 }
                           $result = mysqli_query($con, $sql);

                          # $sql = "SELECT * FROM leitor2 where id = $tmpString";
                           $resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");
                              // Obtendo os dados por meio de um loop while
                           while ($registro = mysqli_fetch_array($resultado))
                           {
                              $id = $registro['id'];
                              $cod = $registro['codproduto'];
                              $desc = $registro['descproduto'];
                              $qtde = $registro['lqtde'];

                          }
                    ?>
                            </div>
                                  <form class="needs-validation" action="alterarcodtransferencia2.php" method="POST">
                                        <div class="form-row">
                                          <div class="col-md-1 mb-3">
                                            <label for="validationCustom01">ID</label>
                                            <input type="text" name="id" class="form-control" id="id" placeholder="id" value="<?php echo $id; ?>"  required>
                                            <div class="valid-feedback">
                                              Tudo certo!
                                            </div>
                                          </div>
                                              <div class="col-md-2 mb-3">
                                                <label for="validationCustom01">COD</label>
                                                <input type="text" name="cod" class="form-control" id="cod" placeholder="Nome" value="<?php echo $cod; ?>"  required >
                                                <div class="valid-feedback">
                                                  Tudo certo!
                                                </div>
                                              </div>
                                              <div class="col-md-5 mb-3">
                                                <label for="validationCustom01">DESCRIÇÃO</label>
                                                <input type="text" name="desc" class="form-control" id="desc" placeholder="Nome" value="<?php echo $desc; ?>"  required disabled>
                                                <div class="valid-feedback">
                                                  Tudo certo!
                                                </div>
                                              </div>
                                              <div class="col-md-1 mb-3">
                                                <label for="validationCustom01">Quantidade</label>
                                                <input type="text" name="qtde" class="form-control" id="qtde" placeholder="" value=""  required>
                                                <div class="valid-feedback">
                                                  Tudo certo!
                                                </div>
                                              </div>

                                          </div>
                                        </d iv>
                                      <button class="btn btn-primary" type="submit">Salvar</button>
                                        <a class="btn btn-primary" href="transferencia.php">Voltar</a>
                                      </form>
                                    </div>
                                </div>
                            </div>
                    </div>

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
                    <a class="btn btn-primary" href="Logout.php">Sim</a>
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

<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5>Lista de Usuários</h5>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
 
                                        </div>
                                        <?php

                                             $sql = "SELECT * FROM usuario as u INNER JOIN empresa as e ON u.cidade = e.cod order by nome";
                                             $result = mysqli_query($con, $sql);

                                              if($sql === FALSE) {
                                                    // Consulta falhou, parar aqui
                                                    die(mysqli_error());
                                                }
                                        ?>
                                            <table class="table table-striped table-bordered table-condensed table-hover">
                                              <tr >

                                                <th>Nome</th>
                                                <th>Sobrenome</th>
                                                <th>Loja Origem</th>
                                                <th>Alterar</th>
                                                <th>Excluir</th>


                                              </tr>

                                        <?php

                                                    while($row = mysqli_fetch_assoc($result)) {
                                                    $user = $row['id'];
                                                    $link_address = "alterarusuario.php?tmpString=$user";
                                                    $link_address2 = "excluirusuarios.php?tmpString=$user";

                                                    echo "<tr>";
                                                    echo "<td>" .$row['nome'];"</td>";
                                                    echo "<td>" .$row['sobrenome'];"</td>";
                                                    echo "<td>" .$row['CIDADE'];"</td>";
                                                    echo "<td><a href='".$link_address."'>Alterar</a></td>";
                                                    echo "<td><a href='".$link_address2."'>Excluir</a></td>";



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

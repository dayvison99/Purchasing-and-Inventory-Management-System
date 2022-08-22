<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h5 mb-0 text-gray-800">Cadastro de Usuários</h5>

                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                    <?php
                           if (isset($_GET['tmpString'])){
                               $tmpString = $_GET['tmpString'];
                               $_SESSION["iduser"] = $tmpString;

                             }
                           else
                                $tmpString = null;

                           $sql = "SELECT * FROM usuario where id = $tmpString";
                           $resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");
                              // Obtendo os dados por meio de um loop while
                           while ($registro = mysqli_fetch_array($resultado))
                           {
                              $nome = $registro['nome'];
                              $sobrenome = $registro['sobrenome'];
                              $permissao = $registro['permissao'];
                              $usuario = $registro['usuario'];
                              $cidade= $registro['cidade'];
                              $senha = $registro['senha'];
                          }
                    ?>

                                        </div>
                                        <form class="needs-validation" action="alterardadosusuario.php" method="POST">
                                            <div class="form-row">
                                              <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Primeiro nome</label>

                                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="<?php echo $nome; ?>"  required>
                                                <div class="valid-feedback">
                                                  Tudo certo!
                                                </div>
                                              </div>
                                              <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Sobrenome</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Sobrenome" required name="sobrenome" value="<?php echo $sobrenome; ?>">
                                                <div class="valid-feedback">
                                                  Tudo certo!
                                                </div>
                                              </div>
                                              <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Usuário</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                  </div>
                                                  <input type="text" class="form-control" id="validationCustomUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend" required name="usuario" value="<?php echo $usuario; ?>">
                                                  <div class="invalid-feedback">
                                                    Por favor, escolha um nome de usuário.
                                                  </div>
                                                </div>
                                              </div>
                                            </div>



                                            <div class="form-row">
                                              <div class="col-md-4 mb-3">
                                                <label for="validationCustom03">Cidade    </label>
                                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label>
                                                <?php

                                                    echo '<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="cidade">';
                                                    if($cidade == 1){
                                                          echo '<option selected value="1">JANUÁRIA</option>';
                                                          echo '<option value="2">SÃO FRANCISCO</option>';
                                                          echo '<option value="5">BRASÍLIA DE MINAS</option>';
                                                        }
                                                    if($cidade == 2){
                                                              echo '<option value="1">JANUÁRIA</option>';
                                                              echo '<option selected value="2">SÃO FRANCISCO</option>';
                                                              echo '<option value="5">BRASÍLIA DE MINAS</option>';
                                                            }

                                                    if($cidade == 5){
                                                              echo '<option value="1">JANUÁRIA</option>';
                                                              echo '<option value="2">SÃO FRANCISCO</option>';
                                                              echo '<option selected  value="5">BRASÍLIA DE MINAS</option>';
                                                        }
                                                            ?>
                                                    </select>
                                                <div class="invalid-feedback">
                                                  Por favor, informe uma cidade válida.
                                                </div>
                                              </div>
                                              <div class="form-row">
                                                <div class="col-md-10 mb-3">

                                                <label for="inputPassword6">Senha</label>
                                                <input type="password" required id="inputPassword6" name="senha" placeholder="Senha" class="form-control mx-sm-3" minlength="8" maxlength="20" aria-describedby="passwordHelpInline" value="<?php echo $senha; ?>">
                                                <small id="passwordHelpInline" class="text-muted">
                                                  Deve ter entre 8 e 20 caracteres.
                                                </small>
                                              </div>
                                                </div>

                                                <div class="form-row">
                                            <div class="col-md-8 mb-3">

                                                <label for="validationCustom03">Permissão</label>
                                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label>

                                                <?php

                                                    echo '<select class="custom-select mr-sm-2" required id="inlineFormCustomSelect" name="permissao" required>';
                                                    if($permissao == "administrador"){
                                                          echo '<option selected value="administrador">GESTÃO DE ESTOQUE</option>';
                                                          echo '<option value="estoque">AUX DE ESTOQUE</option>';

                                                        }
                                                    if($permissao == "estoque"){
                                                              echo '<option value="administrador">GESTÃO DE ESTOQUE</option>';
                                                              echo '<option selected value="estoque">AUX DE ESTOQUE</option>';

                                                            }

                                                    if($permissao == "root"){
                                                                  echo '<option value="administrador">GESTÃO DE ESTOQUE</option>';
                                                                  echo '<option value="estoque">AUX DE ESTOQUE</option>';
                                                                  echo '<option selected value="root">Root</option>';

                                                                }
                                                            ?>


                                                    </select>
                                                <div class="invalid-feedback">
                                                  Por favor, informe uma cidade válida.
                                                </div>
                                                </div>
                                                </div>
                                              </div>

                                            <button class="btn btn-primary" type="submit">Salvar</button>
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

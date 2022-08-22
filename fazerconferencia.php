<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
                <!-- Begin Page Content -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-3">
                        <h5>Selecionar Estoque</h5>
                    </div>


                    <!-- Content Row -->
                    <div class="row col-xs-1">

                      <form action="GetDadosProdutosconferenciajn.php" method="POST" >

                        <div class="form-group">
                          <i>Cidades</i>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="cidade" required>
                                      <option disabled selected></option>
                                <?php
                                      if ($_SESSION['empresa'] == "1"){
                                            $query = $con->query("SELECT * FROM empresa order by CIDADE");
                                            while($reg = $query->fetch_array())
                                            {
                                                echo '<option value="'.$reg["COD"].'">'.$reg["CIDADE"].'</option>';
                                            }
                                          }
                                       else{
                                              $aux = $_SESSION['empresa'];
                                              $query = $con->query("SELECT * FROM empresa where COD = $aux");
                                              while($reg = $query->fetch_array())
                                              {
                                                  echo '<option value="'.$reg["COD"].'" selected>'.$reg["CIDADE"].'</option>';
                                              }
                                        }


                                ?>
                                </select>
                        </div>
                        <div class="form-group">
                          <i>Marcas</i>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="marca" required>
                                        <option selected value="0" disabled>TODAS</option>
                                <?php
                                      $query = $con->query("SELECT * FROM est017 order by DESCMARCA");
                                      while($reg = $query->fetch_array())
                                      {
                                          #echo '<option value="'.$reg["MARCACONTADOR"].'">'.$reg["DESCMARCA"].'</option>';
                                      }
                                ?>
                                </select>
                        </div>
                        <div class="form-group">
                          <i>Grupos</i>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="grupo" required>
                                      <option disabled selected></option>
                                <?php
                                      $query = $con->query("SELECT * FROM est002 order by DESCGRUPO");
                                      while($reg = $query->fetch_array())
                                      {
                                          echo '<option value="'.$reg["GRUPOCONTADOR"].'">'.$reg["DESCGRUPO"].'</option>';
                                      }
                                ?>
                                </select>
                        </div>
                        <div class="form-group">
                          <i>SubGrupos</i>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="subgrupo" required>
                                      <option selected value="0">TODOS</option>
                                <?php
                                      $query = $con->query("SELECT * FROM est003  group by SUBGCONTADOR");
                                      while($reg = $query->fetch_array())
                                      {
                                          echo '<option value="'.$reg["SUBGCONTADOR"].'">'.$reg["DESCSUBG"].'</option>';
                                      }
                                ?>
                                </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Estoque</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="opcao">
                            <option value="1">Todos</option>
                            <option value="2" selected>Com Estoque</option>
                            <option value="3" disabled>Sem Estoque</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <a href="leitorbm.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Continuar Conferência Anterior</button></a></li></b>

                      </form>

                    <br/>
<br/>


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

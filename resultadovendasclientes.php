<?php
    require("layout/topo.php");
    require("layout/menu.php");
    if(!isset($_SESSION)){
          session_start();
    }

    if (isset($_SESSION['cidadecliente'])){
        $empresavenda = $_SESSION['cidadecliente'];
    } else {
       echo "Por Favor, Emita o Relatório de Pos Vendas";
      $empresavenda = 0;
      return;
    }
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5>Lista de Clientes para Mandar Mensagens</h5>
                    </div>
                    <!-- Content Row -->

<div class="form-group col-xs-4" >
  <a href="gerar_lista_clientes.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Gerar Excel</button></a></li></th>
</form>
</div>

</form>
</div><br/><br/>

      <?php

               $usuario = $_SESSION['UsuarioID'];
               $sql = "SELECT * FROM vendas as v INNER JOIN clientes as c ON c.codcliente = v.idcliente and c.empresa = v.empresa where idcliente != 1 and c.empresa = $empresavenda group by idclientes order by datavenda";
               $sqlresult = mysqli_query($con, $sql);
      ?>
        <table class="table table-striped table-bordered table-condensed table-hover">
            <tr class="">
              <th>Cod Cliente</th>
              <th>Nome</th>
              <th>WhatsApp</th>
              <th>Celular</th>
              <th>Celular 2</th>
              <th>Celular 3</th>
              <th>Telefone</th>
              <th>Data Venda</th>
              <th>Valor Venda</th>
            </tr>
      <?php

                 while($row = mysqli_fetch_assoc($sqlresult)) {
                   $whatsApp = 0;
                   $datavenda = date('d/m/Y', strtotime(str_replace("-", "/", $row['datavenda'])));
                    if ($row['celular']) {
                      if (strlen($row['celular']) == 14) {
                         $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular']);
                      }else if (strlen($row['celular']) == 13) {
                         $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['celular']);
                      }else if (strlen($row['celular']) == 11 && substr($row['celular'],1,1) != 3) {
                         if (strpos($row['celular'], '(') === false) {
                           $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular']);
                         }else {
                           $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular']);
                         }
                       }else if (strlen($row['celular']) == 12 && substr($row['celular'],1,1) != 3) {
                          if (strpos($row['celular'], '(') === false) {
                            $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular']);
                          }else {
                            $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular']);
                          }
                        }
                    }else   if ($row['celular2']) {
                        if (strlen($row['celular2']) == 14) {
                           $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular2']);
                        }else if (strlen($row['celular2']) == 13) {
                          $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['celular2']);
                        }else if (strlen($row['celular2']) == 11 && substr($row['celular2'],1,1) != 3) {
                           if (strpos($row['celular2'], '(') === false) {
                             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular2']);
                           }else {
                             $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular2']);
                           }
                         }else if (strlen($row['celular2']) == 12 && substr($row['celular2'],1,1) != 3) {
                            if (strpos($row['celular2'], '(') === false) {
                              $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular2']);
                            }else {
                              $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular2']);
                            }
                          }
                    }else   if ($row['celular3']) {
                        if (strlen($row['celular3']) == 14) {
                           $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular3']);
                        }else if (strlen($row['celular3']) == 13) {
                          $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['celular3']);
                        }else if (strlen($row['celular3']) == 11 && substr($row['celular3'],1,1) != 3) {
                           if (strpos($row['celular3'], '(') === false) {
                             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular3']);
                           }else {
                             $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular3']);
                           }
                         }else if (strlen($row['celular3']) == 12 && substr($row['celular3'],1,1) != 3) {
                            if (strpos($row['celular3'], '(') === false) {
                              $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular3']);
                            }else {
                              $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular3']);
                            }
                          }
                    }else if ($row['telefone']) {
                        if (strlen($row['telefone']) == 14) {
                           $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['telefone']);
                        }else if (strlen($row['telefone']) == 13) {
                           $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['telefone']);
                        }else if (strlen($row['telefone']) == 11 && substr($row['telefone'],1,1) != 3) {
                           if (strpos($row['telefone'], '(') === false) {
                             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['telefone']);
                           }else {
                             $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['telefone']);
                           }
                        }else if (strlen($row['telefone']) == 12 && substr($row['telefone'],1,1) != 3) {
                           if (strpos($row['telefone'], '(') === false) {
                             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['telefone']);
                           }else {
                             $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['telefone']);
                           }
                         }

                    }

                    echo "<tr>";
                    echo "<td>" .$row['idcliente'];"</td>";
                    echo "<td>" .$row['nome'];"</td>";
                    echo "<td>" .$whatsApp;"</td>";
                    echo "<td>" .$row['celular'];"</td>";
                    echo "<td>" .$row['celular2'];"</td>";
                    echo "<td>" .$row['celular3'];"</td>";
                    echo "<td>" .$row['telefone'];"</td>";
                    echo "<td>" .$datavenda;"</td>";
                    echo "<td>" .$row['valor'];"</td>";
                  }

         ?>



</table>




</div>
                          </div>
                            </div>


</div>
</div>

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


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair do Sistema?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja Excluir Dados e Inciar nova leitura?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
                    <a class="btn btn-primary" href="fazerconferencia.php">Sim</a>
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

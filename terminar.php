<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Divergências</h1>
                        <a class="btn btn-primary" href="transferencia.php">Continuar Leitura</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row col-xs-1">



                    <br/>
<br/>
<div class="form-group col-xs-1">

</div>
<br/><br/>

<div class="form-group col-xs-6" >

</div><br/><br/>

      <?php
        if ($_SESSION['empresa'] == "1"){
           $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitortransferenciajn as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
           $leitorresult = mysqli_query($con, $leitor);

           $transferencia = "SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as entrada, t.quantidadeSaida as saida, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto FROM transferenciajn as t LEFT OUTER JOIN est004 as e ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.DESCPRODUTO order by tnome ";
           $transferenciaresult = mysqli_query($con, $transferencia);

           $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto  ";
           $result = mysqli_query($con, $sql);
         }
         if ($_SESSION['empresa'] == "2"){
            $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitortransferenciasf as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
            $leitorresult = mysqli_query($con, $leitor);

            $transferencia = "SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as entrada, t.quantidadeSaida as saida, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto FROM transferenciasf as t LEFT OUTER JOIN est004 as e ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.DESCPRODUTO,e.CODPRODUTO order by tnome ";
            $transferenciaresult = mysqli_query($con, $transferencia);

            $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto,e.CODPRODUTO  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto ,e.CODPRODUTO ";
            $result = mysqli_query($con, $sql);
          }
          if ($_SESSION['empresa'] == "5"){
             $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitortransferenciabm as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
             $leitorresult = mysqli_query($con, $leitor);

             $transferencia = "SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as entrada, t.quantidadeSaida as saida, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto FROM transferenciabm as t LEFT OUTER JOIN est004 as e ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.DESCPRODUTO order by tnome ";
             $transferenciaresult = mysqli_query($con, $transferencia);

             $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto  ";
             $result = mysqli_query($con, $sql);
           }



      ?>
        <table class="table table-striped table-bordered table-condensed table-hover">
          <tr border="1">

                <th colspan="3"><center>Dados do Leitor</center></th>
                <th><center>-</center></th>
                <th colspan="3"><center>Dados do Sistema</center></th>
                <th colspan="2"><center>Erros</center></th>
          </tr>
            <tr class="">
                  <th>Cód</th>
                  <th>Descrição</th>
                  <th>QTDE</th>
                  <th > - </th>
                  <th>Cód</th>
                  <th>QTDE</th>
                  <th>Descrição</th>
                  <th colspan="2">Diferença</th>

            </tr>
      <?php
               while($row = mysqli_fetch_assoc($result)) {
                  $leitor = mysqli_fetch_assoc($leitorresult);
                  $transferencia = mysqli_fetch_assoc($transferenciaresult);
                  $entrada = round($row['tentrada']);
                  if($row['lcodigo'] > 0 or $row['tcodigo'] >0) {
                    if(($row['lcodigo'] != $row['tcodigo'])or($row['lcodigo'] = $row['tcodigo'] and $entrada != $row['lqtde'])) {

                          echo "<tr >";
                              echo "<td>" .$row['lcodigo'];"</td>";
                              if($row['lcodigo'] > 0){
                              echo "<td>" .$row['descproduto'];"</td>";
                            }else {
                              echo "<td></td>";
                            }
                              echo "<td>" .$row['lqtde'];"</td>";
                              echo "<td>-</td>";

                              echo "<td>" .$row['tcodigo'];"</td>";
                              echo "<td>" .$entrada;"</td>";
                              echo "<td>" .$row['tnome'];"</td>";
                              if ($row['lqtde']-$entrada > 0 and $entrada > 0)
                                  echo "<td> Leu ".($row['lqtde']-$entrada)." a MAIS";"</td>";
                              if ($row['lqtde']-$entrada < 0 and $entrada > 0)
                                  echo "<td> Faltou ".-($row['lqtde']-$entrada);"</td>";
                              if ($row['lqtde']-$entrada == 0 and $entrada > 0)
                                  echo "<td> - </td>";
                              if ($entrada == 0)
                                  echo "<td> Não Existe na Entrada </td>";
                                  if ($row['lqtde'] <= 0 and $row['lcodigo'] == NULL)
                                      echo "<td>  Ñ LEU </td>";


                          echo "</tr>";

                       }}

              }
         ?>
</table>




</div>
                          </div>
                            </div>


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

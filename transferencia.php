<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Conferir Transferências</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row col-xs-1">



                    <br/>
<br/>
<div class="form-group col-xs-1">
<form action='valida_transferencia.php' method='post' name="formgrupo">
     <label for="inputPassword2" class="sr-only" >C&oacute;digo de Barras</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="C&oacute;digo de Barras" name="buscar" autofocus="true" value="">
</div>
<div class="form-group col-xs-1">
  <h1 class="h3 mb-0 text-gray-800">  - </h1>
</div>
<div class="form-group col-xs-4" >
  <input type="submit" class="btn btn-primary" value="Buscar"/>
</form>
</div>
<br/><br/>
<div class="form-group col-xs-1">
  <h1 class="h3 mb-0 text-gray-800">  - </h1>
</div>
<div class="form-group col-xs-6" >
<form action="terminar.php" method="post" enctype="multipart/form-data" >
    <input type="submit" class="btn btn-primary" value="Terminar"/>
      <a href="gerar_planilhatransferencia.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Imprimir Transferência</button></a></li>
</form>
</div><br/><br/>

      <?php
           if ($_SESSION['empresa'] == "1"){
               $sql = "SELECT * FROM leitortransferenciajn as l INNER JOIN est004 as e ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 order by l.id desc   ";
               $result = mysqli_query($con, $sql);

               $produtos = "SELECT * FROM est004 as e INNER JOIN leitortransferenciajn as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 order by l.id desc  ";
               $produtosresult = mysqli_query($con, $produtos);
             }
             if ($_SESSION['empresa'] == "2"){
                 $sql = "SELECT * FROM leitortransferenciasf as l INNER JOIN est004 as e ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 order by l.id desc   ";
                 $result = mysqli_query($con, $sql);

                 $produtos = "SELECT * FROM est004 as e INNER JOIN leitortransferenciasf as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 order by l.id desc  ";
                 $produtosresult = mysqli_query($con, $produtos);
               }
               if ($_SESSION['empresa'] == "5"){
                   $sql = "SELECT * FROM leitortransferenciabm as l INNER JOIN est004 as e ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 order by l.id desc   ";
                   $result = mysqli_query($con, $sql);

                   $produtos = "SELECT * FROM est004 as e INNER JOIN leitortransferenciabm as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 order by l.id desc  ";
                   $produtosresult = mysqli_query($con, $produtos);
                 }

      ?>
        <table class="table table-striped table-bordered table-condensed table-hover">
            <tr class="">

              <th>Codigo</th>
              <th>Descrição</th>
              <th>Leu</th>
              <th>Transferiu</th>
              <th>Alterar Qtde</th>
              <th>Excluir</th>



            </tr>

      <?php

                 while($row = mysqli_fetch_assoc($result)) {
                  $rowprodutos = mysqli_fetch_assoc($produtosresult);
                  $cod = $row['id'];
                  $link_compras = "excluircodtransferencia.php?tmpString=$cod";
                  $link_alterar = "alterarcodtranferencia.php?tmpString=$cod";
                  echo "<tr >";
                  echo "<td>" .$row['codproduto'];"</td>";
                  echo "<td>" .$rowprodutos['DESCPRODUTO'];"</td>";
                #  if($rowprodutos['quantidadeEntrada'] == $rowprodutos['diferenca']){
                          echo "<td bgcolor=#ADD8E6>-</td>";
                            echo "<td bgcolor=#ADD8E6>-</td>";
                        #  echo "<td bgcolor=#ADD8E6>" .$rowprodutos['diferenca'];"</td>";
                    #  }
                #  if($rowprodutos['quantidade'] > $rowprodutos['diferenca']){
                      #    echo "<td bgcolor=#FA8072>" .$rowprodutos['quantidade'];"</td>";
                      #    echo "<td bgcolor=#FA8072>" .$rowprodutos['diferenca'];"</td>";
                    #      }
                #  if($rowprodutos['quantidade'] < $rowprodutos['diferenca']){
                      #    echo "<td>" .$rowprodutos['quantidade'];"</td>";
                      #    echo "<td>" .$rowprodutos['diferenca'];"</td>";
                #  }
                  echo "<td><a href='".$link_alterar."'><button type=button class=btn btn-primary>ALTERAR</button></a></li></a></td>";
                  echo "<td><a href='".$link_compras."'><button type=button class=btn btn-primary>EXCLUIR</button></a></li></a></td>";

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

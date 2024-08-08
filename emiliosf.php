<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
                <!-- Begin Page Content -->


</div>

      <?php
            $marca = $_POST['marca'];
            $_SESSION['marca'] = $marca;

            $jn = "SELECT j.empresa,j.codproduto,j.descproduto,j.estaual,j.estmaximo,j.precofinal,p.ID, p.EMPRESA, p.CODPRODUTO, p.CONTAPRODUTO, p.DESCPRODUTO, p.GRUPO, p.SUBGRUPO, p.MARCA, p.ESTMINIMO, p.ESTMAXIMO FROM cvs2 as j INNER JOIN est004 as p ON p.CONTAPRODUTO = j.codproduto and j.empresa = p.EMPRESA where (p.MARCA = '$marca' and j.empresa = 2 and p.EMPRESA = 2) and (p.GRUPO =  78 or  p.GRUPO =  52 or  p.GRUPO =  170 or  p.GRUPO =  171 or  p.GRUPO =  172 or  p.GRUPO =  173 or  p.GRUPO =  174 or  p.GRUPO =  179 or  p.GRUPO =  181 or  p.GRUPO =  183 or  p.GRUPO =  184 or  p.GRUPO =  185 or  p.GRUPO =  186 or  p.GRUPO =  187 or  p.GRUPO =  188 or  p.GRUPO =  207 or  p.GRUPO =  10 or  p.GRUPO =  104 or  p.GRUPO =  107 or  p.GRUPO =  11 or  p.GRUPO =  111 or  p.GRUPO =  114 or  p.GRUPO =  117 or  p.GRUPO =  119 or  p.GRUPO =  120 or  p.GRUPO =  13 or  p.GRUPO =  139 or  p.GRUPO =  14 or  p.GRUPO =  141 or  p.GRUPO =  142 or  p.GRUPO =  15 or  p.GRUPO =  159 or  p.GRUPO =  16 or  p.GRUPO =  160 or  p.GRUPO =  165 or  p.GRUPO =  166 or  p.GRUPO =  167 or  p.GRUPO =  168 or  p.GRUPO =  169 or  p.GRUPO =  177 or  p.GRUPO =  178 or  p.GRUPO =  180 or  p.GRUPO =  182 or  p.GRUPO =  19 or  p.GRUPO =  21 or  p.GRUPO =  26 or  p.GRUPO =  3 or  p.GRUPO =  30 or  p.GRUPO =  31 or  p.GRUPO =  32 or  p.GRUPO =  33 or  p.GRUPO =  35 or  p.GRUPO =  4 or  p.GRUPO =  40 or  p.GRUPO =  53 or  p.GRUPO =  54 or  p.GRUPO =  56 or  p.GRUPO =  57 or  p.GRUPO =  59 or  p.GRUPO =  62 or  p.GRUPO =  63 or  p.GRUPO =  64 or  p.GRUPO =  65 or  p.GRUPO =  7 or  p.GRUPO =  71 or  p.GRUPO =  73 or  p.GRUPO =  75 or  p.GRUPO =  77 or  p.GRUPO =  8 or  p.GRUPO =  82 or  p.GRUPO =  83 or  p.GRUPO =  85 or  p.GRUPO =  88 or  p.GRUPO =  9 or  p.GRUPO =  90) order by j.descproduto";
            $jnresult = mysqli_query($con, $jn);

          if($jn === FALSE) {
                  // Consulta falhou, parar aqui
                  die(mysqli_error());
          }

              ?>

      <div class="jumbotron"><center>

        <legend class="legend-border"><h4> Lista de Compras São Francisco</h4></legend>
        <form action="" method="post" class="form">
          <div class="form-group input-group col-xs-7" >
              Digite o Código do Produto
          </div>
          <div class="form-group input-group col-xs-7">

             <table id="tabela" class="table table-striped table-bordered table-condensed table-hover">
               <tr>
                 <th width="20%"><input autofocus name="nome" id="nome" placeholder="Código do Produto" type="text" class="form-control"></th>
               </th>
            </table>
          </div>


          <div class="form-group input-group col-xs-7">


          </div>


          <table id="tabela" class="table table-striped table-bordered table-condensed table-hover" title="Balanceamento!">
             <tr ><th colspan="2"><a href="imprimiremiliosf.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Imprimir Lista de Compras</button></a></li></th>
                 <th colspan="2"><a href="gerar_planilhasf.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Gerar Excel</button></a></li></th>
                  <th colspan="4"><a href="marcassf.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Voltar</button></a></li></th>
             </th>
             </tr>
            <tr>

              <th>Descrição</th>
              <th>Preço</th>
              <th>Est Atual</th>
              <th>Est Maximo</th>
              <th>Sugestão</th>
             </tr>
      <?php
               while($rowjn = mysqli_fetch_assoc($jnresult)) {

                  $difjn = $rowjn['estaual']-$rowjn['estmaximo'];

                  #cabecario jn
                  echo "<tr>";

                  echo "<td>" .$rowjn['descproduto'];"</td>";
                  echo "<td>R$ " .$rowjn['precofinal'];"</td>";
                  echo "<td>" .$rowjn['estaual'];"</td>";
                  echo "<td>" .$rowjn['estmaximo'];"</td>";

                  if ($rowjn['estaual'] >= $rowjn['estmaximo']){
                      echo "<td>-</td>";


                  }
                  else{
                    echo "<td>" .-$difjn;"</td>";

                  }
                  echo "</tr>";


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

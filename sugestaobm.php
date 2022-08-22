<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
                <!-- Begin Page Content -->


</div>

      <?php

      $lojas = "SELECT *,j.id as jnid,j.empresa as jnempresa,j.codproduto as jncodprduto,j.descproduto as jndescproduto,j.referencia as jnreferencia,j.estaual as jnestaual,j.estminino as jnestminino,j.estmaximo as jnestmaximo,j.difmaxest as jndifmaxest ,j.unidade as jnunidade,j.datacompra as jndatacompra,j.precofinal as jnprecofinal,j.dataalteracao as jndataalteracao, s.id as sfid,s.empresa as sfempresa,s.codproduto as sfcodprduto,s.descproduto as sfdescproduto,s.referencia as sfreferencia,s.estaual as sfestaual,s.estminino as sfestminino,s.estmaximo as sfestmaximo,s.difmaxest as sfdifmaxest ,s.unidade as sfunidade,s.datacompra as sfdatacompra,s.precofinal as sfprecofinal,s.dataalteracao as sfdataalteracao, b.id as bmid,b.empresa as bmempresa,b.codproduto as bmcodprduto,b.descproduto as bmdescproduto,b.referencia as bmreferencia,b.estaual as bmestaual,b.estminino as bmestminino,b.estmaximo as bmestmaximo,b.difmaxest as bmdifmaxest ,b.unidade as bmunidade,b.datacompra as bmdatacompra,b.precofinal as bmprecofinal,b.dataalteracao as bmdataalteracao FROM cvs as j INNER JOIN cvs2 as s ON s.codproduto = j.codproduto INNER JOIN cvs3 as b ON b.codproduto = j.codproduto INNER JOIN est004 as p ON p.CONTAPRODUTO = s.codproduto where (j.empresa = 1 and p.empresa = 1 and b.estaual > b.estminino) and (p.GRUPO !=  19 or p.GRUPO !=  49 or p.GRUPO !=  100 or p.GRUPO !=  122 or p.GRUPO !=  145 or p.GRUPO !=  157 or p.GRUPO !=  158 or p.GRUPO !=  161 or p.GRUPO !=    176 or p.GRUPO !=  208 or p.GRUPO !=  209 or p.GRUPO !=  210 or p.GRUPO !=  211 or p.GRUPO !=  212 or p.GRUPO !=  213 or p.GRUPO !=  214 or p.GRUPO !=  216 or p.GRUPO !=  1 or p.GRUPO !=  106 or p.GRUPO !=  110 or p.GRUPO !=  112 or p.GRUPO !=  12 or p.GRUPO !=  121 or p.GRUPO !=  123 or p.GRUPO !=  124 or p.GRUPO !=  125 or p.GRUPO !=  126 or p.GRUPO !=  127 or p.GRUPO !=  128 or p.GRUPO !=  130 or p.GRUPO !=  132 or p.GRUPO !=  133 or p.GRUPO !=  137 or p.GRUPO !=  138 or p.GRUPO !=  146 or p.GRUPO !=  147 or p.GRUPO !=  148 or p.GRUPO !=  149 or p.GRUPO !=  150 or p.GRUPO !=  162 or p.GRUPO !=  163 or p.GRUPO !=  164 or p.GRUPO !=  17 or p.GRUPO !=  175 or p.GRUPO !=  18 or p.GRUPO !=  199 or p.GRUPO !=  2 or p.GRUPO !=  200 or p.GRUPO !=  201 or p.GRUPO !=  202 or p.GRUPO !=  23 or p.GRUPO !=  25 or p.GRUPO !=  36 or p.GRUPO !=  37 or p.GRUPO !=  38 or p.GRUPO !=  39 or p.GRUPO !=  41 or p.GRUPO !=  45 or p.GRUPO !=  46 or p.GRUPO !=  5 or p.GRUPO !=  50 or p.GRUPO !=  55 or p.GRUPO !=  66 or p.GRUPO !=  69 or p.GRUPO !=  72 or p.GRUPO !=  74 or p.GRUPO !=  93 or p.GRUPO !=  94 or p.GRUPO !=  96 or p.GRUPO !=  97 or p.GRUPO !=  98) order by j.descproduto";
      $lojasresult = mysqli_query($con, $lojas);

      if($lojas === FALSE) {
        // Consulta falhou, parar aqui
        die(mysqli_error());
      }
      ?>

      <div class="jumbotron"><center>

        <legend class="legend-border"><h4> Balanceamento Saíndo de Brasília </h4></legend>
        <form action="" method="post" class="form">
          <div class="form-group input-group col-xs-7" >
              Digite o Código do Produto
          </div>
          <?php
                echo "Atualizado em : ";
                echo $_SESSION['data'];
                ?>
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
             <tr >
              <th>Cód</th>
              <th>Descrição</th>
              <th>Excendentes BM</th>
              <th><a href="imprimirbm-jn.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-danger">Para JN</button></a></li></th>
              <th><a href="imprimirbm-sf.php" id="sf"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Para SF</button></a></li></th>

          </tr>
      <?php
               while($rowjn = mysqli_fetch_assoc($lojasresult)) {

                  $rowsf = $rowjn;
                  $rowbm = $rowjn;
                  $difjn = $rowjn['jnestaual']-$rowjn['jnestminino'];
                  $difsf = $rowsf['sfestaual']-$rowsf['sfestminino'];
                  $difbm = $rowbm['bmestaual']-$rowbm['bmestminino'];

                  #Cabecario BM
                  echo "<tr >";
                  echo "<td>" .$rowbm['bmcodprduto'];"</td>";
                  echo "<td>" .$rowbm['bmdescproduto'];"</td>";

                  #se estoque de atual de BM for maior que o estoque minino
                  if ($rowbm['bmestaual'] > $rowbm['bmestminino']){
                    echo "<td>" .$difbm;"</td>";
                  }
                  else{
                    echo "<td>-</td>";
                  }

                  #se SF e JN estão precisando

                  if($difbm > 0){

                        #Jn precinsando de BM
                            if ($rowjn['jnestaual'] < $rowjn['jnestminino'] and $rowsf['sfestaual'] <= $rowsf['sfestminino'] ){
                              #BM tem mais que jn precisa
                                if($rowbm['bmestaual'] - $rowbm['bmestminino'] >= $rowjn['jnestminino']-$rowjn['jnestaual'] and $difsf <= 0){
                                  echo "<td>".($rowjn['jnestminino']-$rowjn['jnestaual']);"</td>";
                                }
                              #BM tem menos que jn precisa
                                if($rowbm['bmestaual'] - $rowbm['bmestminino'] < $rowjn['jnestminino']-$rowjn['jnestaual'] and $difsf <= 0){
                                  echo "<td>".($rowbm['bmestaual'] - $rowbm['bmestminino']);"</td>";
                                }


                            }else{
                                     echo "<td>-</td>";
                         }

                          #sf precinsando de BM
                          if($rowjn['jnestaual'] > $rowjn['jnestminino'] and  $rowsf['sfestaual'] < $rowsf['sfestminino'] ){
                                  if($rowjn['jnestaual'] - $rowjn['jnestminino'] >= $rowsf['sfestminino'] - $rowsf['sfestaual']){
                                      echo "<td>-</td>";
                                  }
                                  else {
                                      echo "<td>-</td>";
                                  }
                                }

                          if($rowjn['jnestaual'] <= $rowjn['jnestminino'] and  $rowsf['sfestaual'] < $rowsf['sfestminino'] ){
                                  if($rowjn['jnestminino'] - $rowjn['jnestaual'] > $difbm){
                                        echo "<td>-</td>";
                                  }

                                  if($rowsf['sfestminino'] - $rowsf['sfestaual'] <=  $difbm-($rowjn['jnestminino'] - $rowjn['jnestaual'])){
                                    echo "<td>".($rowsf['sfestminino'] - $rowsf['sfestaual']);"</td>";

                              }
                              if($rowsf['sfestminino'] - $rowsf['sfestaual'] >  $difbm-($rowjn['jnestminino'] - $rowjn['jnestaual'])){
                                if($difbm-($rowjn['jnestminino'] - $rowjn['jnestaual'])>0)
                                echo "<td>".($difbm-($rowjn['jnestminino'] - $rowjn['jnestaual']));"</td>";

                          }



                        }



               }else {
                   echo "<td>-</td>";
               }


                                  }

         ?>
</table>


</div>
                          </div>
                            </div>

<div class="container my-auto">
    <div class="copyright text-center my-auto">
<form action="excel.php" method="post" enctype="multipart/form-data" >
  <input type="submit" class="btn btn-primary" value="Gerar Excel"/>


<input type="button" class="btn btn-primary" value="Salvar" onClick="window.print()"/>
</form>
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

<?php
require("layout/topo.php");
require("layout/menu.php");

$sql = "SELECT * FROM funcionarios order by nome";
$result = mysqli_query($con, $sql);
?>

<div class="jumbotron"><center>

  <legend class="legend-border"><h4> Lista de Funcionários </h4></legend>
  <form action="listaponto.php" method="post" class="form">


    <div class="form-group input-group col-xs-7" >
      <input type="checkbox" name="cores[]" onclick="marcarTodos(this.checked);">
      <span id="acao">  Marcar Todos </span> <br>

    </div>
    <div class="form-group input-group col-xs-7" >
      <input type="date" value="data" autofocus name="data" id="nome3" placeholder="Data" type="text" class="form-control">
    </div>


    <table id="tabela" class="table table-striped table-bordered table-condensed table-hover" title="Balanceamento!">
      <tr >
        <th>Marcar</th>
        <th>Nome</th>
        <th>Função</th>
        <!-- <th><a href="imprimirjn-sf.php" id="sf"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Para SF</button></a></li></th> -->
        <!-- <th><a href="imprimirjn-bm.php" id="sf"><i class="ion-help"></i> <button type="button" class="btn btn-success">Para BM</button></a></li></th> -->
      </tr>
      <tr>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
          ?>
          <?php  echo "<td>"?>  <input type="checkbox" name="cores[]" value="nome"><?php  echo "</td>"?>
          <?php echo "<td>".$row['nome']  ;"</td>";?>
          <?php  echo "<td>".$row['funcao']  ;"</td>";?>
          <?php  echo "<tr/>";
        }
        ?>

      </table>
      <button type="submit" class="btn btn-primary btn-lg btn-block" >Caderno de Ponto</button>
    </p>
    <a href="funcionario.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Cadastrar Funcionário</button></a>
    <script type="text/javascript">
    function marcarTodos(marcar){
      var itens = document.getElementsByName('cores[]');

      if(marcar){
        document.getElementById('acao').innerHTML = 'Desmarcar Todos';
      }else{
        document.getElementById('acao').innerHTML = 'Marcar Todos';
      }

      var i = 0;
      for(i=0; i<itens.length;i++){
        itens[i].checked = marcar;
      }

    }
    </script>



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


<!-- End of Content Wrapper -->


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

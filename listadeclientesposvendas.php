<?php
    require("layout/topo.php");
    require("layout/menu.php");
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h5>Lista de Clientes Pos Venda</h5>
    </div>
    <div class="row col-xs-1">
      <form action="GetDadosVendas.php" method="POST" >
      <div class="form-group">
        <i>Cidades</i>
          <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="cidade" required>
                <option disabled selected></option>
              <?php
                  $query = $con->query("SELECT * FROM empresa order by CIDADE");
                  while($reg = $query->fetch_array()){
                      echo '<option value="'.$reg["COD"].'">'.$reg["CIDADE"].'</option>';
                  }
          ?>
  </select>
  </div>
  <div  class="form-group">
      <label for="exampleFormControlSelect1">Data Inicial</label>
      <input required type="date" value="dateinicial" name="dateinicial" id="dateinicial" placeholder="Data" type="text" class="form-control"></th>
  </div>
  <div  class="form-group">
      <label for="exampleFormControlSelect1">Data Inicial</label>
      <input required type="date" value="datefinal" name="datefinal" id="datefinal" placeholder="Data" type="text" class="form-control"></th>
  </div>
  <button type="submit" class="btn btn-primary">Buscar</button>
</form>
<!-- Begin Page Content -->


</div>
</div>
</div>
</div>
</div>
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Cantinho  2024</span>
    </div>
  </div>
</footer>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>

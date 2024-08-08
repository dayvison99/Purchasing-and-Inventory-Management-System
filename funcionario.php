<?php
require("layout/topo.php");
require("layout/menu.php");

?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h5>Cadastro de Funcionários</h5>
  </div>


  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->

  </div>
  <form class="needs-validation" action="dadosfuncionario.php" method="POST">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome"  required>
        <div class="valid-feedback">
          Tudo certo!
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Função</label>
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="funcao">
          <option selected disabled name="funcao">Escolher...</option>
          <option value="Caixa">Caixa</option>
          <option value="Estoque">Estoque</option>
          <option value="Financeiro">Financeiro</option>
          <option value="Marketing">Marketing</option>
          <option value="Vendas">Vendas</option>
        </select>
        <div class="invalid-feedback">
          Por favor, informe uma função válida.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Cidade</label>
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="cidade">
          <option selected disabled name="cidade">Escolher...</option>
          <option value="1">JANUÁRIA</option>
          <option value="2">SÃO FRANCISCO</option>
          <option value="5">BRASÍLIA DE MINAS</option>
        </select>
        <div class="invalid-feedback">
          Por favor, informe uma cidade válida.
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
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

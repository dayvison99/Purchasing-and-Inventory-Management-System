<?php
require("layout/topo.php");
require("layout/menu.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Importar Arquivo</h1>
  </div>
  <!-- Content Row -->
  <?php
  $idusuario =  $_SESSION['UsuarioID'];

  include_once("conexao.php");

  #  $recebido = $_POST["arquivo"];

  $nome = $_FILES['arquivo']['name'];
  $tmp_name = $_FILES['arquivo']['tmp_name'];

  $ext = explode(".", $nome);
  $extensao = end($ext);

  if ($extensao != "txt") {
    $PHPtext = $_SESSION['Nome'] . ", Você importou uma Extensão Inválida " . $extensao . " precisa ser TXT, Refaça a importação";
  ?>
    <script type="text/javascript">
      var JavaScriptAlert = <?php echo json_encode($PHPtext); ?>;
      alert(JavaScriptAlert); // Your PHP alert!
    </script>
  <?php
    return;
  } else {
    $recebido = fopen($tmp_name, 'r');

    while (($dados = fgetcsv($recebido, 1000, ",")) !== FALSE) {
      $codproduto = utf8_encode($dados[0]);
      $nome = utf8_encode($dados[1]);
      $marca = utf8_encode($dados[2]);
      $quantidadeSaida = str_replace(',', '.', utf8_encode($dados[3]));
      $quantidadeEntrada =str_replace(',', '.',  utf8_encode($dados[4]));
      $empresa = $_SESSION['empresa'];

      if ($_SESSION['empresa'] == "1") {
        $result = "INSERT INTO comprasjn(`codproduto`, `descricao`, `quantidade`, `pavista`, `pprazo`,`idusuario`,`empresa`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada','$idusuario','$empresa')";
        $result2 = "INSERT INTO leitorcomprasjn(`codproduto`, `diferenca`, `quantidade`, `idusuario`,`empresa`) VALUES ('$codproduto','0','0','$idusuario','$empresa')";
        $queryresult2 = mysqli_query($con, $result2);
        $queryresult = mysqli_query($con, $result);
      }

      if ($_SESSION['empresa'] == "2") {
        $result = "INSERT INTO comprassf(`codproduto`, `descricao`, `quantidade`, `pavista`, `pprazo`,`idusuario`,`empresa`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada','$idusuario','$empresa')";
        $result2 = "INSERT INTO leitorcomprassf(`codproduto`, `diferenca`, `quantidade`, `idusuario`,`empresa`) VALUES ('$codproduto','0','0','$idusuario','$empresa')";
        $queryresult2 = mysqli_query($con, $result2);
        $queryresult = mysqli_query($con, $result);
      }

      if ($_SESSION['empresa'] == "5") {
        $result = "INSERT INTO comprasbm(`codproduto`, `descricao`, `quantidade`, `pavista`, `pprazo`,`idusuario`,`empresa`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada','$idusuario','$empresa')";
        $result2 = "INSERT INTO leitorcomprasbm(`codproduto`, `diferenca`, `quantidade`, `idusuario`,`empresa`) VALUES ('$codproduto','0','0','$idusuario','$empresa')";
        $queryresult2 = mysqli_query($con, $result2);
        $queryresult = mysqli_query($con, $result);
      }

      if ($_SESSION['empresa'] == "6") {
        $result = "INSERT INTO comprasmaimai(`codproduto`, `descricao`, `quantidade`, `pavista`, `pprazo`,`idusuario`,`empresa`) VALUES ('$codproduto','$nome','$marca','$quantidadeSaida','$quantidadeEntrada','$idusuario','$empresa')";
        $result2 = "INSERT INTO leitorcomprasmaimai(`codproduto`, `diferenca`, `quantidade`, `idusuario`,`empresa`) VALUES ('$codproduto','0','0','$idusuario','$empresa')";
        $queryresult2 = mysqli_query($con, $result2);
        $queryresult = mysqli_query($con, $result);
      }
    }
    if ($queryresult and $queryresult2) {
      echo "Dados Atualizados com Sucesso";
    } else {
      echo "Erro na atualização";
    }
  }
  ?>

  <!-- Content Row -->
  <div class="row">
  </div>
  <br />
  <br />
  <div class="row">
    <label for="exampleFormControlFile1">Click em Conferir para Lançar os Produtos da Entrada</label></br>
  </div>
  <div class="row">
    <a href="compras.php" value="Conferir"><button type="submit" class="btn btn-primary">Conferir</button></a>
  </div>

  <div class="row">
    <div class="row">
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Cantinho 2021</span>
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
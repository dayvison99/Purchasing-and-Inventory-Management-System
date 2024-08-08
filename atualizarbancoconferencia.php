<?php
require("layout/topo.php");
require("layout/menu.php");

?>


<?php
if (!isset($_SESSION)) {
  session_start();
}

include_once("conexao.php");

$cidade = strtoupper($_POST["cidade"]);
$grupo = strtoupper($_POST["grupo"]);
$subgrupo1 = strtoupper($_POST["subgrupo"]);
$opcao = $_POST["opcao"];

$_SESSION['grupoconferir'] = $grupo;
$_SESSION['cidadeconferir'] = $cidade;
$_SESSION['empresaconf'] = $cidade;

$usuario = $_SESSION['UsuarioID'];

//Instalar a extensão SOAP no php
//1º Localize o arquivo php.ini na pasta bin do apache: apache/bin/php.ini
//2º Remover o ‘;‘ do início de extension=php_soap.dll
//3º Reinicie o servidor http
try {

  require_once 'GetDadosProdutosconferenciajn.php';
  require_once 'GetEstoqueProdutos.php';

  // Atribui o conteúdo do resultado para variável $arquivo
  $produtosjn = $resultprodutosjn;
  $estoque = $resultprodutosestoque;

  // Decodifica o formato JSON e retorna um Objeto
  $jsonprdutosjn = json_decode($produtosjn);
  $jsonestoque = json_decode($estoque);

  if ($_SESSION['empresaconf'] == 1) {
    $resultproduto = "DELETE FROM `auxestoquejn` WHERE usuario = $usuario";
    $queryresultproduto = mysqli_query($con, $resultproduto);
    $zerarproduto = "ALTER TABLE `auxestoquejn` AUTO_INCREMENT=1";
    $queryresultproduto = mysqli_query($con, $zerarproduto);
    $excluir = "DELETE FROM `leitorconferenciajn` WHERE usuario = $usuario";
    $queryexcluir = mysqli_query($con, $excluir);
    $zerar1 = "ALTER TABLE `leitorconferenciajn` AUTO_INCREMENT=1";
    $queryresult = mysqli_query($con, $zerar1);
  }
  if ($_SESSION['empresaconf'] == 2) {
    $resultproduto = "DELETE FROM `auxestoquesf` WHERE usuario = $usuario";
    $queryresultproduto = mysqli_query($con, $resultproduto);
    $zerarproduto = "ALTER TABLE `auxestoquesf` AUTO_INCREMENT=1";
    $queryresultproduto = mysqli_query($con, $zerarproduto);
    $excluir = "DELETE FROM `leitorconferenciasf`WHERE usuario = $usuario";
    $queryexcluir = mysqli_query($con, $excluir);
    $zerar1 = "ALTER TABLE `leitorconferenciasf` AUTO_INCREMENT=1";
    $queryresult = mysqli_query($con, $zerar1);
  }
  if ($_SESSION['empresaconf'] == 5) {
    echo "Empesa 5 em manutenção";
    exit;
    $resultproduto = "DELETE FROM `auxestoquebm` WHERE usuario = $usuario";
    $queryresultproduto = mysqli_query($con, $resultproduto);
    $zerarproduto = "ALTER TABLE `auxestoquebm` AUTO_INCREMENT=1";
    $queryresultproduto = mysqli_query($con, $zerarproduto);
    $excluir = "DELETE FROM `leitorconferenciabm` WHERE usuario = $usuario";
    $queryexcluir = mysqli_query($con, $excluir);
    $zerar1 = "ALTER TABLE `leitorconferenciabm` AUTO_INCREMENT=1";
    $queryresult = mysqli_query($con, $zerar1);
  }
  if ($_SESSION['empresaconf'] == 6) {
    echo "Empesa 6 em manutenção";
    exit;
    $resultproduto = "DELETE FROM `auxestoquemaimai` WHERE usuario = $usuario";
    $queryresultproduto = mysqli_query($con, $resultproduto);
    $zerarproduto = "ALTER TABLE `auxestoquemaimia` AUTO_INCREMENT=1";
    $queryresultproduto = mysqli_query($con, $zerarproduto);
    $excluir = "DELETE FROM `leitorconferenciamaimai` WHERE usuario = $usuario";
    $queryexcluir = mysqli_query($con, $excluir);
    $zerar1 = "ALTER TABLE `leitorconferenciamaimai` AUTO_INCREMENT=1";
    $queryresult = mysqli_query($con, $zerar1);
  }

  // Loop para percorrer o Objeto
  //grupo
  foreach ($jsonprdutosjn->LJSISTEMAS as $produtos) :
    foreach ($jsonestoque->LJSISTEMAS as $estoque) :
      if ($produtos->CODPRODUTO == $estoque->CODPRODUTO) {
        $estoquetotal = $estoque->ESTOQUE;
        break;
      }
    endforeach;
    $empresa = $produtos->EMPRESA;
    $codproduto = $produtos->CODPRODUTO;
    $contaproduto = $codproduto / 1;
    $descricao = $produtos->DESCPRODUTO;
    $grupo = $produtos->GRUPO;
    $subgrupo = $produtos->SUBGRUPO;
    $marca = $produtos->MARCA;
    $usuarios = $usuario;

    #Estoque total
    if ($codproduto > 0) {
      if ($opcao == 1) {
        if ($subgrupo1 ==  $subgrupo and $estoquetotal >= 0) {

          if ($_SESSION['empresaconf'] == 1) {
            $resultprodutojn = "INSERT INTO auxestoquejn(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 2) {
            $resultprodutojn = "INSERT INTO auxestoquesf(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 5) {
            $resultprodutojn = "INSERT INTO auxestoquebm(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 6) {
            $resultprodutojn = "INSERT INTO auxestoquemaimai(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
        }

        if ($subgrupo1 ==  '0' and $estoquetotal >= 0) {

          if ($_SESSION['empresaconf'] == 1) {
            $resultprodutojn = "INSERT INTO auxestoquejn(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 2) {
            $resultprodutojn = "INSERT INTO auxestoquesf(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 5) {
            $resultprodutojn = "INSERT INTO auxestoquebm(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 6) {
            $resultprodutojn = "INSERT INTO auxestoquemaimai(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
        }
      }
      if ($opcao == 2) {

        if ($subgrupo1 ==  $subgrupo and $estoquetotal >= 1) {

          if ($_SESSION['empresaconf'] == 1) {
            $resultprodutojn = "INSERT INTO auxestoquejn(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 2) {
            $resultprodutojn = "INSERT INTO auxestoquesf(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 5) {
            $resultprodutojn = "INSERT INTO auxestoquebm(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 6) {
            $resultprodutojn = "INSERT INTO auxestoquemaimai(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
        }

        if ($subgrupo1 ==  '0' and $estoquetotal >= 1) {

          if ($_SESSION['empresaconf'] == 1) {
            $resultprodutojn = "INSERT INTO auxestoquejn(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 2) {
            $resultprodutojn = "INSERT INTO auxestoquesf(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 5) {
            $resultprodutojn = "INSERT INTO auxestoquebm(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 6) {
            $resultprodutojn = "INSERT INTO auxestoquemaimai(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
        }
      }
      if ($opcao == 3) {
        if ($subgrupo1 ==  $subgrupo and $estoquetotal == 0) {
          if ($_SESSION['empresaconf'] == 1) {
            $resultprodutojn = "INSERT INTO auxestoquejn(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 2) {
            $resultprodutojn = "INSERT INTO auxestoquesf(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 5) {
            $resultprodutojn = "INSERT INTO auxestoquebm(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 6) {
            $resultprodutojn = "INSERT INTO auxestoquemaimai(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
        }
        if ($subgrupo1 ==  '0' and $estoquetotal == 0) {
          if ($_SESSION['empresaconf'] == 1) {
            $resultprodutojn = "INSERT INTO auxestoquejn(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 2) {
            $resultprodutojn = "INSERT INTO auxestoquesf(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 5) {
            $resultprodutojn = "INSERT INTO auxestoquebm(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
          if ($_SESSION['empresaconf'] == 6) {
            $resultprodutojn = "INSERT INTO auxestoquemaimai(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`,`ESTOQUE`,`USUARIO`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca','$estoquetotal','$usuarios')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);
          }
        }
      }
    } else {
      echo "Erro na atualização dos Dados";
    }
  endforeach;

  require_once 'lj/SetStatus.php';
} catch (Exception $e) {
  echo 'Erro ao conectar com o servidor! '; 
}
?>
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h4>Atualização de Dados </h4>
  </div>

  <p/>
  <style>
    .pequeno {
      width: 20%;
    }

    .medio {
      width: 100%;
    }
  </style>

  <section class="row">
    <div class="col-xl-12">
      <table class="table_painel">
        <tr>
          <th>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
            </td>
        </tr>
        <tr>
          <th colspan="1">
            <center><b> <a href="leitorbm.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Continuar</button></a></li></b></center>
          </th>
        </tr>
      </table>
    </div>
  </section>
  <div class="row">
  </div>
</div>
</div>
</div>
</div>
</div>
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Cantinho 2024</span>
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
?>
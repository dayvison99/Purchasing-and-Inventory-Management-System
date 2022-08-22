<?php
include_once("conexao.php");
if(!isset($_SESSION)){
        session_start();
  }
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
$cidade = $_POST['cidade'];

$result = mysqli_query($con,"SELECT * FROM usuario WHERE usuario='$usuariot' AND senha='$senhat' AND cidade = '$cidade' ");
$resultado = mysqli_fetch_assoc($result);

$result2 = mysqli_query($con,"SELECT * FROM usuario WHERE usuario='$usuariot' AND senha='$senhat' ");
$resultado2 = mysqli_fetch_assoc($result2);

$date = mysqli_query($con,"SELECT * FROM cvs ");
$dateresultado = mysqli_fetch_assoc($date);

if($resultado == FALSE and $resultado2 == TRUE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      include_once("index.php");
      echo "<script>
            window.alert(' Você Não Tem Acesso a Essa Cidade!')
          </script>";
          return false;
  }


if($resultado == FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      include_once("index.php");
      echo "<center>Usuário ou Senha Invalidos!</center>";

      return false;

  } else {
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['usuario'];
      $_SESSION['Nome'] = $resultado['nome'];
      $_SESSION['permissao'] = $resultado['permissao'];
      $_SESSION['data'] = $dateresultado['dataalteracao'];
      $_SESSION['empresa'] = $resultado['cidade'];


      if($_SESSION['permissao'] == "root" or $_SESSION['permissao'] == "administrador" ){
         include_once("home.php");
         #include_once("controllers/conexao.php");
      #  include_once("atualizarbanco.php");
      }
      if ($_SESSION['permissao'] == "estoque") {
        include_once("home.php");
      #  include_once("atualizarbanco.php");
      }
      if ($_SESSION['permissao'] == "caixa") {
        include_once("home.php");
      #  include_once("atualizarbanco.php");
      }
  }


?>
<?php
    $PHPtext = "Atenção! Antes de Fazer Qualquer Leitura De Codigo de Barras Atualize o Arquivo de Estoque ";
?>
<script type="text/javascript">
  var JavaScriptAlert = <?php echo json_encode($PHPtext); ?>;
  alert(JavaScriptAlert); // Your PHP alert!
</script>

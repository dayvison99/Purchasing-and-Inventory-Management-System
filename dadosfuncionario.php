<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

$sql = "SELECT * FROM funcionarios order by nome";
$result = mysqli_query($con, $sql);

$nome = strtoupper($_POST["nome"]) ;
$funcao = $_POST["funcao"];
$cidade = $_POST["cidade"];


while($row = mysqli_fetch_assoc($result)) {
  if ($nome == $row['nome']){
      $status = 1;
  }else
    $status = 2;
}
echo $status;
echo $nome;
echo "<br/>";
echo $row['nome'];
echo $row['idfuncionarios'];
// exit;
if($status = 1){
?>
  <script>alert("Funcionario Já Cadastrado");
  return false;
  </script>
<?php
}

if ($nome){
$user = "INSERT INTO funcionarios(`nome`, `funcao`,`cidade`) VALUES ('$nome', '$funcao','$cidade')";
$inserir = mysqli_query($con, $user);

if($user === FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Dados inseridos com sucesso!";
    echo "</center>";
    $nome = null ;
    $funcao = null;
    $cidade = null;
    include_once("cadernodeponto.php");
  }
}else{
    echo "Insira os dados!";
}
#$inserirconsulta = mysqli_fetch_assoc($inserir);

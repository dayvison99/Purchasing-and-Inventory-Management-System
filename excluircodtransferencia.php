<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

$excluir  = $_GET['tmpString'];

  if ($_SESSION['empresa'] == "1"){
      $user = "DELETE FROM leitortransferenciajn WHERE id = $excluir";
      $inserir = mysqli_query($con, $user);
  }

  if ($_SESSION['empresa'] == "2"){
      $user = "DELETE FROM leitortransferenciasf WHERE id = $excluir";
      $inserir = mysqli_query($con, $user);
  }

  if ($_SESSION['empresa'] == "5"){
      $user = "DELETE FROM leitortransferenciabm WHERE id = $excluir";
      $inserir = mysqli_query($con, $user);
  }


if($user == FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Item excluído com sucesso!";
    echo "</center>";
    include_once("Transferencia.php");
  }
#$inserirconsulta = mysqli_fetch_assoc($inserir);

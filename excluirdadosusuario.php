<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

$excluir = $_SESSION["iduser"];

$user = "DELETE FROM usuario WHERE id = $excluir";
$inserir = mysqli_query($con, $user);


if($user === FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Dados excluídos com sucesso!";
    echo "</center>";
    include_once("listarusuario.php");
  }
#$inserirconsulta = mysqli_fetch_assoc($inserir);

<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

$excluir  = $_GET['tmpString'];

      $idusuario =  $_SESSION['UsuarioID'];


      if ($_SESSION['empresa'] == "1"){
      $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprasjn where id = $excluir ");
      while($aux = mysqli_fetch_assoc($resultaux)) {
            $auxcod = $aux['codproduto'];
            $auxqtde = $aux['quantidade'] - 1;
            $alter = "UPDATE leitorcomprasjn set quantidade = $auxqtde  where codproduto = $auxcod and idusuario = $idusuario ";
            $inserir = mysqli_query($con, $alter );
      }
    }
    if ($_SESSION['empresa'] == "2"){
    $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprassf where id = $excluir ");
    while($aux = mysqli_fetch_assoc($resultaux)) {
          $auxcod = $aux['codproduto'];
          $auxqtde = $aux['quantidade'] - 1;
          $alter = "UPDATE leitorcomprassf set quantidade = $auxqtde  where codproduto = $auxcod ";
          $inserir = mysqli_query($con, $alter );
    }
  }
  if ($_SESSION['empresa'] == "5"){
  $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprasbm where id = $excluir ");
  while($aux = mysqli_fetch_assoc($resultaux)) {
        $auxcod = $aux['codproduto'];
        $auxqtde = $aux['quantidade'] - 1;
        $alter = "UPDATE leitorcomprasbm set quantidade = $auxqtde  where codproduto = $auxcod ";
        $inserir = mysqli_query($con, $alter );
  }
}


    if ($_SESSION['empresa'] == "1")
        $user = "DELETE FROM leitorcomprasjn WHERE id = $excluir";

    if ($_SESSION['empresa'] == "2")
        $user = "DELETE FROM leitorcomprassf WHERE id = $excluir";
    if ($_SESSION['empresa'] == "5")
        $user = "DELETE FROM leitorcomprasbm WHERE id = $excluir";

    $inserir = mysqli_query($con, $user);


if($user == FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Item excluído com sucesso!";
    echo "</center>";
    include_once("compras.php");
  }
#$inserirconsulta = mysqli_fetch_assoc($inserir);

<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

$excluir  = $_GET['tmpString'];


        if ($_SESSION['empresa'] == "1"){
        $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciajn where id = $excluir ");
        while($aux = mysqli_fetch_assoc($resultaux)) {
              $auxcod = $aux['codproduto'];
              $auxqtde = $aux['quantidade'] - 1;
              $alter = "UPDATE leitorconferenciajn set quantidade = $auxqtde  where codproduto = $auxcod ";
              $inserir = mysqli_query($con, $alter );
        }
        }
        if ($_SESSION['empresa'] == "2"){
        $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciasf where id = $excluir ");
        while($aux = mysqli_fetch_assoc($resultaux)) {
            $auxcod = $aux['codproduto'];
            $auxqtde = $aux['quantidade'] - 1;
            $alter = "UPDATE leitorconferenciasf set quantidade = $auxqtde  where codproduto = $auxcod ";
            $inserir = mysqli_query($con, $alter );
        }
        }
        if ($_SESSION['empresa'] == "5"){
        $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciabm where id = $excluir ");
        while($aux = mysqli_fetch_assoc($resultaux)) {
          $auxcod = $aux['codproduto'];
          $auxqtde = $aux['quantidade'] - 1;
          $alter = "UPDATE leitorconferenciabm set quantidade = $auxqtde  where codproduto = $auxcod ";
          $inserir = mysqli_query($con, $alter );
        }
        }




    if ($_SESSION['empresa'] == "1")
        $user = "DELETE FROM leitorconferenciajn WHERE id = $excluir";
    if ($_SESSION['empresa'] == "2")
        $user = "DELETE FROM leitorconferenciasf WHERE id = $excluir";
    if ($_SESSION['empresa'] == "5")
        $user = "DELETE FROM leitorconferenciabm WHERE id = $excluir";

    $inserir = mysqli_query($con, $user);


if($user == FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Item excluído com sucesso!";
    echo "</center>";
    include_once("leitorbm.php");
  }
#$inserirconsulta = mysqli_fetch_assoc($inserir);

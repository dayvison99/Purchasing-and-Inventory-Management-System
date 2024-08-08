<?php
if (!isset($_SESSION)) {
  session_start();
}
include_once("conexao.php");
$usuario = $_SESSION['UsuarioID'];
$excluir  = $_GET['tmpString'];

if ($_SESSION['empresa'] == "1") {
  $resultaux = mysqli_query($con, "SELECT *,l.id as leitorid FROM leitorconferenciajn as l inner join est004 as e on l.codproduto = e.CODPRODUTO where  e.id = $excluir and usuario = $usuario limit 1 ");

  while ($aux = mysqli_fetch_assoc($resultaux)) {
    $auxcod = $aux['codproduto'];
    $auxqtde = $aux['quantidade'] - 1;
    $auxid   = $aux['leitorid'];
    $alter = "UPDATE leitorconferenciajn set quantidade = $auxqtde  where codproduto = $auxcod and usuario = $usuario ";
    $inserir = mysqli_query($con, $alter);
  }
}
if ($_SESSION['empresa'] == "2") {
  $resultaux = mysqli_query($con, "SELECT *,l.id as leitorid FROM leitorconferenciasf as l inner join est004 as e on l.codproduto = e.CODPRODUTO where  e.id = $excluir and usuario = $usuario limit 1 ");

  while ($aux = mysqli_fetch_assoc($resultaux)) {
    $auxcod = $aux['codproduto'];
    $auxqtde = $aux['quantidade'] - 1;
    $auxid   = $aux['leitorid'];
    $alter = "UPDATE leitorconferenciasf set quantidade = $auxqtde  where codproduto = $auxcod and usuario = $usuario ";
    $inserir = mysqli_query($con, $alter);
  }
}
if ($_SESSION['empresa'] == "5") {
  $resultaux = mysqli_query($con, "SELECT *,l.id as leitorid FROM leitorconferenciabm as l inner join est004 as e on l.codproduto = e.CODPRODUTO where  e.id = $excluir and usuario = $usuario limit 1 ");

  while ($aux = mysqli_fetch_assoc($resultaux)) {
    $auxcod = $aux['codproduto'];
    $auxqtde = $aux['quantidade'] - 1;
    $auxid   = $aux['leitorid'];
    $alter = "UPDATE leitorconferenciabm set quantidade = $auxqtde  where codproduto = $auxcod and usuario = $usuario ";
    $inserir = mysqli_query($con, $alter);
  }
}
if ($_SESSION['empresa'] == "6") {
  $resultaux = mysqli_query($con, "SELECT *,l.id as leitorid FROM leitorconferenciamaimai as l inner join est004 as e on l.codproduto = e.CODPRODUTO where  e.id = $excluir and usuario = $usuario limit 1 ");

  while ($aux = mysqli_fetch_assoc($resultaux)) {
    $auxcod = $aux['codproduto'];
    $auxqtde = $aux['quantidade'] - 1;
    $auxid   = $aux['leitorid'];
    $alter = "UPDATE leitorconferenciamaimai set quantidade = $auxqtde  where codproduto = $auxcod and usuario = $usuario ";
    $inserir = mysqli_query($con, $alter);
  }
}

if ($_SESSION['empresa'] == "1")
  $user = "DELETE FROM leitorconferenciajn WHERE id = $auxid and usuario = $usuario";
if ($_SESSION['empresa'] == "2")
  $user = "DELETE FROM leitorconferenciasf WHERE id = $auxid and usuario = $usuario";
if ($_SESSION['empresa'] == "5")
  $user = "DELETE FROM leitorconferenciabm WHERE id = $auxid and usuario = $usuario";
if ($_SESSION['empresa'] == "6")
  $user = "DELETE FROM leitorconferenciamaimai WHERE id = $auxid and usuario = $usuario";

$inserir = mysqli_query($con, $user);

if ($user == FALSE) {
  // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  echo 'Falha ao cadastrar!';
} else {
  echo "<center>";
  echo "Item excluído com sucesso!";
  echo "</center>";
  include_once("leitorbm.php");
}


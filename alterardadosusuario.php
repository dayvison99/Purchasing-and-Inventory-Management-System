<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

$nome = strtoupper($_POST["nome"]) ;
$sobrenome = strtoupper($_POST["sobrenome"]);
$usuario = strtoupper($_POST["usuario"]);
$cidade = $_POST["cidade"];
$senha = $_POST["senha"] ;
$permissao = $_POST["permissao"];
$alterar = $_SESSION["iduser"];

$alter = "UPDATE usuario set nome = '$nome', sobrenome = '$sobrenome', usuario = '$usuario', cidade = '$cidade' , senha = '$senha' , permissao = '$permissao'   where id = $alterar ";
$inserir = mysqli_query($con, $alter );


if($alter == FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Dados Alterados com sucesso!";

    echo "</center>";
    include_once("listarusuario.php");
  }
#$inserirconsulta = mysqli_fetch_assoc($inserir);

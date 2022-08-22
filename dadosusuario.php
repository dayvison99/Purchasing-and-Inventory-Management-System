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

$user = "INSERT INTO usuario(`nome`, `sobrenome`, `usuario`,`cidade`,`senha`,`permissao`) VALUES ('$nome', '$sobrenome', '$usuario','$cidade','$senha','$permissao')";
$inserir = mysqli_query($con, $user);


if($user === FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

      echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Dados inseridos com sucesso!";
    echo "</center>";
    include_once("listarusuario.php");
  }
#$inserirconsulta = mysqli_fetch_assoc($inserir);

<?php
if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <title>Cantinho Da Cegonha</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="valida_login.php" >
	  	<h2 class="form-signin-heading"><img src="img/Cantinho-da-Cegonha.png" height="80%" width="80%"> </h2>

        <h3 class="form-signin-heading"><center>Gestão de Estoque </h3></center>


	    <label for="inputEmail" class="sr-only">Usuário </label>
        <input type="text" name="usuario" class="form-control" placeholder="Digite o Usuário" required autofocus>
         <br />
	    <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required>
        <div class="form-group">
        <select class="form-control" id="cidade" name="cidade"  placeholder="Escolha Uma Cidade" required>
            <option disabled selected></option>
            <option value="1"> 1 - Januária</option>
            <option value="2"> 2 - São Francisco</option>
            <option value="5"> 3 - Brasilia de Minas</option>
          </select>
        </div>
      <div class="checkbox">
          <label>
            <!-- <input type="checkbox" value="remember-me"> Manter Me Conectado -->
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?php
include_once("conexao.php");

if(!isset($_SESSION)){
        session_start();
      }

			$cont = $_POST["buscar"] ;
if($cont){
      if ($_SESSION['empresa'] == "1")
          $result = mysqli_query($con,"SELECT * FROM transferenciajn order by codproduto DESC");
      if ($_SESSION['empresa'] == "2")
          $result = mysqli_query($con,"SELECT * FROM transferenciasf order by codproduto DESC");
      if ($_SESSION['empresa'] == "5")
          $result = mysqli_query($con,"SELECT * FROM transferenciabm order by codproduto DESC");

if($result != ""){
			while($row = mysqli_fetch_assoc($result)) {
			      if($row['codproduto'] == $cont ){
			            $teste = 1;
			            break;
			     }
			      else{
			        $teste = 2;
			    }
			  }

				if($teste == 1){
        if ($_SESSION['empresa'] == "1"){
              $inserir = mysqli_query($con,"INSERT INTO leitortransferenciajn (codproduto) VALUES ($cont)");
            }
        if ($_SESSION['empresa'] == "2"){
              $inserir = mysqli_query($con,"INSERT INTO leitortransferenciasf (codproduto) VALUES ($cont)");
            }
        if ($_SESSION['empresa'] == "5"){
              $inserir = mysqli_query($con,"INSERT INTO leitortransferenciabm (codproduto) VALUES ($cont)");
            }
				}
        else {
          ?>
                     <audio src="sons.mp3" autoplay></audio>
          <?php
		                echo "<script>
		                window.alert(' Produto $cont Não Faz Parte dessa Transferência!')
		                </script>";
		      }

      if ($_SESSION['empresa'] == "1")
        $result = mysqli_query($con,"SELECT * FROM leitortransferenciajn");
      if ($_SESSION['empresa'] == "2")
        $result = mysqli_query($con,"SELECT * FROM leitortransferenciasf");
      if ($_SESSION['empresa'] == "5")
          $result = mysqli_query($con,"SELECT * FROM leitortransferenciabm");
      $resultado = mysqli_fetch_assoc($result);
			$inserir= null;
    }
      else{
        echo "<script>
        window.alert(' Antes de fazer a leitura faça a importação da entrada!')
        </script>";
       }
       include_once("transferencia.php");
     }
     else{
        echo "<center>Insira um codigo !</center>";
      }


?>

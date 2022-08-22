<?php

include_once("conexao.php");

if(!isset($_SESSION)){
        session_start();
      }

      $cont = $_POST["buscar"] ;

      if($_SESSION['empresa'] == 1){
            $result = mysqli_query($con,"SELECT * FROM estatual");
          }
      if($_SESSION['empresa'] == 2)
            $result = mysqli_query($con,"SELECT * FROM estatual");
      if($_SESSION['empresa'] == 5)
            $result = mysqli_query($con,"SELECT * FROM estatual");

      if($result != ""){

            while($row = mysqli_fetch_assoc($result)) {
              if($_SESSION['empresa'] == 1){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciabm where codproduto = $cont  group by codproduto ";
                    $leitorresult = mysqli_query($con, $leitor);
                    $leitor = mysqli_fetch_assoc($leitorresult);
              }
              if($_SESSION['empresa'] == 2){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciabm where codproduto = $cont  group by codproduto ";
                    $leitorresult = mysqli_query($con, $leitor);
                    $leitor = mysqli_fetch_assoc($leitorresult);
              }
              if($_SESSION['empresa'] == 5){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciabm where codproduto = $cont  group by codproduto ";
                    $leitorresult = mysqli_query($con, $leitor);
                    $leitor = mysqli_fetch_assoc($leitorresult);
              }

                  if($row['codproduto'] == $cont ){
                       $diferenca = $row['estoque'];
                       $teste = 1;
                       $quantidade = $leitor['quantidade'] + 1;
                       break;
                  }
                   else{
                      $teste = 2;


                      }
                  }
                   if($teste==1){
                       if($_SESSION['empresa'] == 1)
                              $inserir = mysqli_query($con,"INSERT INTO leitorconferenciabm (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");
                       if($_SESSION['empresa'] == 2)
                              $inserir = mysqli_query($con,"INSERT INTO leitorconferenciabm (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");
                       if($_SESSION['empresa'] == 5)
                               $inserir = mysqli_query($con,"INSERT INTO leitorconferenciabm (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");

                    }
                   else {
                        echo "<script>
                        window.alert(' Produto $cont Não Faz Parte desse Grupo!')
                        </script>";
                    }

                  #$result = mysqli_query($con,"SELECT * FROM leitor2");
                  #$resultado = mysqli_fetch_assoc($result);
                  $inserir= null;
                }
                else{
                  echo "<script>
                  window.alert(' Antes de fazer a leitura faça a importação da entrada!')
                  </script>";
                 }

    include_once("leitorbm.php");

?>

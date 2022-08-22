<?php

include_once("conexao.php");

if(!isset($_SESSION)){
        session_start();
}

      $cont = $_POST["buscar"] ;

      if($_SESSION['empresa']== 1)
            $result = mysqli_query($con,"SELECT * FROM auxestoquejn");
            
      if($_SESSION['empresa'] == 2)
            $result = mysqli_query($con,"SELECT * FROM auxestoquesf");
      if($_SESSION['empresa'] == 5)
            $result = mysqli_query($con,"SELECT * FROM auxestoquebm");

      if($result != ""){

            while($row = mysqli_fetch_assoc($result)){
            if($_SESSION['empresa'] == 1){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciajn where codproduto = $cont  group by codproduto ";
                    $leitorresult = mysqli_query($con, $leitor);
                    $leitor = mysqli_fetch_assoc($leitorresult);
              }
              if($_SESSION['empresa'] == 2){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciasf where codproduto = $cont  group by codproduto ";
                    $leitorresult = mysqli_query($con, $leitor);
                    $leitor = mysqli_fetch_assoc($leitorresult);
              }
              if($_SESSION['empresa'] == 5){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciabm where codproduto = $cont  group by codproduto ";
                    $leitorresult = mysqli_query($con, $leitor);
                    $leitor = mysqli_fetch_assoc($leitorresult);
              }

                  if($row['CODPRODUTO'] == $cont ){
                       $diferenca = $row['ESTOQUE'];
                       $teste = 1;
                       $quantidade = $leitor['quantidade'] + 1;
                       break;
                  }
                   else{
                      $teste = 2;


                      }
                  }

                   if($teste==1){
                       if($_SESSION['empresa'] == 1){
                                    $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciajn ");
                                    while($aux = mysqli_fetch_assoc($resultaux)) {
                                      $alter = "UPDATE leitorconferenciajn set quantidade = $quantidade  where codproduto =$cont";
                                      $inserir = mysqli_query($con, $alter );
                             }

                              $inserir = mysqli_query($con,"INSERT INTO leitorconferenciajn (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");
                            }
                       if($_SESSION['empresa'] == 2){
                                  $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciasf");
                                  while($aux = mysqli_fetch_assoc($resultaux)) {
                                    $alter = "UPDATE leitorconferenciasf set quantidade = $quantidade  where codproduto = $cont";
                                    $inserir = mysqli_query($con, $alter );
                            }
                              $inserir = mysqli_query($con,"INSERT INTO leitorconferenciasf (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");
                            }
                       if($_SESSION['empresa'] == 5){
                                    $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciabm");
                                    while($aux = mysqli_fetch_assoc($resultaux)){
                                      $alter = "UPDATE leitorconferenciabm set quantidade = $quantidade  where codproduto = $cont";
                                      $inserir = mysqli_query($con, $alter );
                         }
                               $inserir = mysqli_query($con,"INSERT INTO leitorconferenciabm (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");

                    }
                  }
                   else {
                     ?>
                                <audio src="sons.mp3" autoplay></audio>
                     <?php
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

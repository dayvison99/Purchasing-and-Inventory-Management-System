<?php

include_once("conexao.php");

if(!isset($_SESSION)){
        session_start();
      }

      $cont = $_POST["buscar"] ;
if($cont){
      $idusuario =  $_SESSION['UsuarioID'];

      if($_SESSION['empresa'] == 1)
            $result = mysqli_query($con,"SELECT * FROM comprasjn where idusuario = $idusuario");
      if($_SESSION['empresa'] == 2)
            $result = mysqli_query($con,"SELECT * FROM comprassf");
      if($_SESSION['empresa'] == 5)
            $result = mysqli_query($con,"SELECT * FROM comprasbm");

      if($result != ""){

            while($row = mysqli_fetch_assoc($result)) {
              if($_SESSION['empresa'] == 1){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorcomprasjn where codproduto = $cont and idusuario = $idusuario and quantidade > 0  group by codproduto ";
              }

              if($_SESSION['empresa'] == 2){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorcomprassf where codproduto = $cont  group by codproduto ";
                  #  $leitorresult = mysqli_query($con, $leitor);
                  #  $leitor = mysqli_fetch_assoc($leitorresult);
              }
              if($_SESSION['empresa'] == 5){
                    $leitor = "SELECT count(codproduto) as quantidade FROM leitorcomprasbm where codproduto = $cont  group by codproduto ";
                  #  $leitorresult = mysqli_query($con, $leitor);
                  #  $leitor = mysqli_fetch_assoc($leitorresult);
              }
              $leitorresult = mysqli_query($con, $leitor);
              $leitor = mysqli_fetch_assoc($leitorresult);
              if($row['codproduto'] == $cont ){
                       $diferenca = $row['quantidade'];
                       $teste = 1;
                       $quantidade = $leitor['quantidade'] + 1;
              break;
              }
              else{
                    $teste = 2;
                    }
              }


                   if($teste == 1){
                       if($_SESSION['empresa'] == 1){
                              $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprasjn");
                              while($aux = mysqli_fetch_assoc($resultaux)) {
                                    if($aux['codproduto'] == $cont and $aux['quantidade'] == 0){
                                      $user = "DELETE FROM leitorcomprasjn WHERE codproduto = $cont";
                                      $inserir = mysqli_query($con, $user);
                                      echo "aqui";
                                    }
                                    $alter = "UPDATE leitorcomprasjn set quantidade = $quantidade  where codproduto = $cont and idusuario = $idusuario ";

                              }
                              $inserir = mysqli_query($con, $alter );
                              $inserir = mysqli_query($con,"INSERT INTO leitorcomprasjn (codproduto,diferenca,quantidade,idusuario) VALUES ($cont,$diferenca,$quantidade,$idusuario)");
                            }

                       if($_SESSION['empresa'] == 2){
                         $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprassf");
                                   while($aux = mysqli_fetch_assoc($resultaux)) {
                                         $alter = "UPDATE leitorcomprassf set quantidade = $quantidade  where codproduto = $cont";
                                         $inserir = mysqli_query($con, $alter );

                       }
                              $inserir = mysqli_query($con,"INSERT INTO leitorcomprassf (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");
                            }
                       if($_SESSION['empresa'] == 5){
                           $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprasbm");
                                     while($aux = mysqli_fetch_assoc($resultaux)) {
                                           $alter = "UPDATE leitorcomprasbm set quantidade = $quantidade  where codproduto = $cont";
                                           $inserir = mysqli_query($con, $alter );
                                     }
                               $inserir = mysqli_query($con,"INSERT INTO leitorcomprasbm (codproduto,diferenca,quantidade) VALUES ($cont,$diferenca,$quantidade)");
                    }
                  }
                   else {
                     ?>
                                <audio src="sons.mp3" autoplay></audio>
                     <?php

                    echo
                    "<script>
                            window.alert(' Produto $cont Não Faz Parte dessa Entrada!');
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

    include_once("compras.php");
}
else{
    echo "<center>Insira um codigo !</center>";
    include_once("compras.php");
}
?>

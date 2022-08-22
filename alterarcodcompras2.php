<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

#$alterar  = $_GET['tmpString'];
$qtde = strtoupper($_POST["qtde"]) ;
$id = strtoupper($_POST["id"]);
$cod = strtoupper($_POST["cod"]);


$cont = 0;

if ($_SESSION['empresa'] == "1"){
      $sql = "SELECT t.codproduto as tcodigo,t.descricao as tnome, t.quantidade as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitorcomprasjn as l ON l.codproduto = e.CODPRODUTO inner JOIN comprasjn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  UNION SELECT t.codproduto as codigo,t.descricao as tnome, t.quantidade as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitorcomprasjn as l ON l.codproduto = e.CODPRODUTO left JOIN comprasjn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  ";
    }
if ($_SESSION['empresa'] == "2"){
          $sql = "SELECT t.codproduto as tcodigo,t.descricao as tnome, t.quantidade as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitorcomprassf as l ON l.codproduto = e.CODPRODUTO inner JOIN comprassf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  UNION SELECT t.codproduto as codigo,t.descricao as tnome, t.quantidade as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitorcomprassf as l ON l.codproduto = e.CODPRODUTO left JOIN comprassf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  ";
        }
if ($_SESSION['empresa'] == "5"){
              $sql = "SELECT t.codproduto as tcodigo,t.descricao as tnome, t.quantidade as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitorcomprasbm as l ON l.codproduto = e.CODPRODUTO inner JOIN comprasbm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  UNION SELECT t.codproduto as codigo,t.descricao as tnome, t.quantidade as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitorcomprasbm as l ON l.codproduto = e.CODPRODUTO left JOIN comprasbm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  ";
            }


$result = mysqli_query($con, $sql);
$idusuario =  $_SESSION['UsuarioID'];


while($row = mysqli_fetch_assoc($result)) {
          if ($_SESSION['empresa'] == "1"){
                $alter = "DELETE FROM leitorcomprasjn WHERE codproduto = $cod and idusuario = $idusuario ";
                $inserir = mysqli_query($con, $alter );
          }
          if ($_SESSION['empresa'] == "2"){
                $alter = "DELETE FROM leitorcomprassf WHERE codproduto = $cod ";
                $inserir = mysqli_query($con, $alter );
          }
          if ($_SESSION['empresa'] == "5"){
                $alter = "DELETE FROM leitorcomprasbm WHERE codproduto = $cod ";
                $inserir = mysqli_query($con, $alter );
          }
        }


while ($qtde > $cont){

        if ($_SESSION['empresa'] == "1"){
            $result = mysqli_query($con,"SELECT * FROM comprasjn  where idusuario = $idusuario");

            while($row = mysqli_fetch_assoc($result)) {

              $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprasjn where codproduto = $cod and idusuario = $idusuario");
              while($aux = mysqli_fetch_assoc($resultaux)) {
                    $alter = "UPDATE leitorcomprasjn set quantidade = $quantidade + 1  where codproduto = $cod and idusuario = $idusuario  ";

              }
              $inserir = mysqli_query($con, $alter );

                  if($row['codproduto'] == $cod ){
                       $leitor = "SELECT count(codproduto) as quantidade FROM leitorcomprasjn where codproduto = $cod and idusuario = $idusuario group by codproduto ";
                       $leitorresult = mysqli_query($con, $leitor);
                       $leitor = mysqli_fetch_assoc($leitorresult);
                       $diferenca = $row['quantidade'];
                       $quantidade = $leitor['quantidade'] + 1;

                       $alter = "INSERT INTO leitorcomprasjn (codproduto,diferenca,quantidade,idusuario) VALUES ($cod,$diferenca,$quantidade,$idusuario)";

                       break;
                  }
            }

        }
        if ($_SESSION['empresa'] == "2"){
            $result = mysqli_query($con,"SELECT * FROM comprassf");
            while($row = mysqli_fetch_assoc($result)) {

              $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprassf where codproduto = $cod ");
              while($aux = mysqli_fetch_assoc($resultaux)) {
                    $alter = "UPDATE leitorcomprassf set quantidade = $quantidade + 1  where codproduto = $cod ";

              }
              $inserir = mysqli_query($con, $alter );

              if($row['codproduto'] == $cod ){
                $leitor = "SELECT count(codproduto) as quantidade FROM leitorcomprassf where codproduto = $cod  group by codproduto ";
                $leitorresult = mysqli_query($con, $leitor);
                $leitor = mysqli_fetch_assoc($leitorresult);
                $diferenca = $row['quantidade'];
                $quantidade = $leitor['quantidade'] + 1;

                $alter = "INSERT INTO leitorcomprassf (codproduto,diferenca,quantidade) VALUES ($cod,$diferenca,$quantidade)";
                break;
              }
          }

     }
        if ($_SESSION['empresa'] == "5"){
        $result = mysqli_query($con,"SELECT * FROM comprasbm");
        while($row = mysqli_fetch_assoc($result)) {

          $resultaux = mysqli_query($con,"SELECT * FROM leitorcomprasbm where codproduto = $cod ");
          while($aux = mysqli_fetch_assoc($resultaux)) {
                $alter = "UPDATE leitorcomprasbm set quantidade = $quantidade + 1  where codproduto = $cod ";

          }
            $inserir = mysqli_query($con, $alter );

          if($row['codproduto'] == $cod ){
            $leitor = "SELECT count(codproduto) as quantidade FROM leitorcomprasbm where codproduto = $cod  group by codproduto ";
            $leitorresult = mysqli_query($con, $leitor);
            $leitor = mysqli_fetch_assoc($leitorresult);
            $diferenca = $row['quantidade'];
            $quantidade = $leitor['quantidade'] + 1;

            $alter = "INSERT INTO leitorcomprasbm (codproduto,diferenca,quantidade) VALUES ($cod,$diferenca,$quantidade)";
            break;
          }
      }

 }
      $inserir = mysqli_query($con, $alter );
      $cont++;
}

#while($row = mysqli_fetch_assoc($result)) {
#       $aux = $row['lqtde'];}
#       if($aux <= $qtde ){
#          $alter = "DELETE FROM leitor2 WHERE codproduto = $cod ";
#          $inserir = mysqli_query($con, $alter );
#        }

$_SESSION["cont"] = $qtde;

if($inserir == FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

    #  echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Quantidade atualizada com sucesso!";
    echo "</center>";
    include_once("compras.php");
  }

  #$inserirconsulta = mysqli_fetch_assoc($inserir);
?>

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
      $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and    l.codproduto = $cod group by e.descproduto  ";
}
if ($_SESSION['empresa'] == "2"){
      $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and    l.codproduto = $cod group by e.descproduto  ";
}
if ($_SESSION['empresa'] == "5"){
      $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto = $cod group by e.descproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and    l.codproduto = $cod group by e.descproduto  ";
}
$result = mysqli_query($con, $sql);


while($row = mysqli_fetch_assoc($result)) {
          if ($_SESSION['empresa'] == "1")
              $alter = "DELETE FROM leitortransferenciajn WHERE codproduto = $cod ";
          if ($_SESSION['empresa'] == "2")
              $alter = "DELETE FROM leitortransferenciasf WHERE codproduto = $cod ";
          if ($_SESSION['empresa'] == "5")
              $alter = "DELETE FROM leitortransferenciabm WHERE codproduto = $cod ";
          $inserir = mysqli_query($con, $alter );
        }


while ($qtde > $cont){
        if ($_SESSION['empresa'] == "1"){
            $alter = "INSERT INTO leitortransferenciajn(`codproduto`) VALUES ('$cod')";
            $inserir = mysqli_query($con, $alter );
          }
        if ($_SESSION['empresa'] == "2"){
            $alter = "INSERT INTO leitortransferenciasf(`codproduto`) VALUES ('$cod')";
            $inserir = mysqli_query($con, $alter );
          }
        if ($_SESSION['empresa'] == "5"){
           $alter = "INSERT INTO leitortransferenciabm(`codproduto`) VALUES ('$cod')";
           $inserir = mysqli_query($con, $alter );
         }
    
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
    include_once("transferencia.php");
  }

  #$inserirconsulta = mysqli_fetch_assoc($inserir);
?>

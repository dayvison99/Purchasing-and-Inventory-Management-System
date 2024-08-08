<?php

if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");


$qtde = strtoupper($_POST["qtde"]) ;
$id = strtoupper($_POST["id"]);
$cod = strtoupper($_POST["cod"]);
$cont = 0;
// $quantidade = 0;




if ($_SESSION['empresa'] == "1"){
  $sql = "SELECT t.codproduto as tcodigo,t.DESCPRODUTO as tnome, t.estoque as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitorconferenciajn as l ON l.codproduto = e.CODPRODUTO inner JOIN auxestoquejn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto =$cod group by e.descproduto UNION SELECT t.codproduto as tcodigo,t.DESCPRODUTO as tnome, t.estoque as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e left  JOIN leitorconferenciajn as l ON l.codproduto = e.CODPRODUTO left JOIN auxestoquejn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto =$cod group by e.descproduto";
}
if ($_SESSION['empresa'] == "2"){
  $sql = "SELECT t.codproduto as tcodigo,t.DESCPRODUTO as tnome, t.estoque as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitorconferenciasf as l ON l.codproduto = e.CODPRODUTO inner JOIN auxestoquesf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto =$cod group by e.descproduto UNION SELECT t.codproduto as tcodigo,t.DESCPRODUTO as tnome, t.estoque as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e left  JOIN leitorconferenciasf as l ON l.codproduto = e.CODPRODUTO left JOIN auxestoquesf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto =$cod group by e.descproduto";
}
if ($_SESSION['empresa'] == "5"){
  $sql = "SELECT t.codproduto as tcodigo,t.DESCPRODUTO as tnome, t.estoque as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitorconferenciabm as l ON l.codproduto = e.CODPRODUTO inner JOIN auxestoquebm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto =$cod group by e.descproduto UNION SELECT t.codproduto as tcodigo,t.DESCPRODUTO as tnome, t.estoque as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e left  JOIN leitorconferenciabm as l ON l.codproduto = e.CODPRODUTO left JOIN auxestoquebm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.codproduto =$cod group by e.descproduto";
}

$result = mysqli_query($con, $sql);

$usuario = $_SESSION['UsuarioID'];

while($row = mysqli_fetch_assoc($result)) {
          if ($_SESSION['empresa'] == "1"){
                $alter = "DELETE FROM leitorconferenciajn WHERE codproduto = $cod and usuario = $usuario";
                $inserir = mysqli_query($con, $alter );
          }
          if ($_SESSION['empresa'] == "2"){
                $alter = "DELETE FROM leitorconferenciasf WHERE codproduto = $cod and usuario = $usuario ";
                $inserir = mysqli_query($con, $alter );
          }
          if ($_SESSION['empresa'] == "5"){
                $alter = "DELETE FROM leitorconferenciabm WHERE codproduto  = $cod and usuario = $usuario";
                $inserir = mysqli_query($con, $alter );
          }
        }


while($qtde > $cont){

  if ($_SESSION['empresa'] == "1"){
      $result = mysqli_query($con,"SELECT * FROM auxestoquejn where usuario = $usuario");

      while($row = mysqli_fetch_assoc($result)) {

        $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciajn where codproduto = $cod and usuario = $usuario ");
        while($aux = mysqli_fetch_assoc($resultaux)){
              $alter = "UPDATE leitorconferenciajn set quantidade = $quantidade + 1  where codproduto = $cod and usuario = $usuario";
            }
            $inserir = mysqli_query($con, $alter );
                if($row['CODPRODUTO'] >= $cod){
                       $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciajn where codproduto = $cod and usuario = $usuario  group by codproduto";
                       $leitorresult = mysqli_query($con, $leitor);
                       $leitor = mysqli_fetch_assoc($leitorresult);
                       $diferenca = $row['ESTOQUE'];
                       $quantidade = $leitor['quantidade'] + 1;
                       $alter = "INSERT INTO leitorconferenciajn (codproduto,diferenca,quantidade,usuario) VALUES ($cod,$diferenca,$quantidade,$usuario)";
                       break;
                  }

            }

        }
        if ($_SESSION['empresa'] == "2"){
            $result = mysqli_query($con,"SELECT * FROM auxestoquesf where usuario = $usuario");
            while($row = mysqli_fetch_assoc($result)) {

              $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciasf where codproduto = $cod and usuario = $usuario ");
              while($aux = mysqli_fetch_assoc($resultaux)) {
                    $alter = "UPDATE leitorconferenciasf set quantidade = $quantidade + 1  where codproduto = $cod and usuario = $usuario ";

              }
                $inserir = mysqli_query($con, $alter );
                        if($row['CODPRODUTO'] >= $cod){
                             $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciasf where codproduto = $cod and usuario = $usuario  group by codproduto";
                             $leitorresult = mysqli_query($con, $leitor);
                             $leitor = mysqli_fetch_assoc($leitorresult);
                             $diferenca = $row['ESTOQUE'];
                             $quantidade = $leitor['quantidade'] + 1;
                             $alter = "INSERT INTO leitorconferenciasf (codproduto,diferenca,quantidade,usuario) VALUES ($cod,$diferenca,$quantidade,$usuario)";
                             break;
                        }

                  }

              }
              if ($_SESSION['empresa'] == "5"){
                  $result = mysqli_query($con,"SELECT * FROM auxestoquebm where usuario = $usuario");
                  while($row = mysqli_fetch_assoc($result)) {

                    $resultaux = mysqli_query($con,"SELECT * FROM leitorconferenciabm where codproduto = $cod and usuario = $usuario ");

                    while($aux = mysqli_fetch_assoc($resultaux)) {
                          $alter = "UPDATE leitorconferenciabm set quantidade = $quantidade + 1  where codproduto = $cod and usuario = $usuario ";
                    }
                        $inserir = mysqli_query($con, $alter );
                              if($row['CODPRODUTO'] >= $cod){
                                   $leitor = "SELECT count(codproduto) as quantidade FROM leitorconferenciabm where codproduto = $cod and usuario = $usuario  group by codproduto";
                                   $leitorresult = mysqli_query($con, $leitor);
                                   $leitor = mysqli_fetch_assoc($leitorresult);
                                   $diferenca = $row['ESTOQUE'];
                                   $quantidade = $leitor['quantidade'] + 1;
                                   $alter = "INSERT INTO leitorconferenciabm (codproduto,diferenca,quantidade,usuario) VALUES ($cod,$diferenca,$quantidade,$usuario)";
                                   break;
                              }

                        }

                    }
$inserir = mysqli_query($con, $alter );
$cont++;
}



$_SESSION["cont"] = $qtde;

if($inserir == FALSE) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

    #  echo 'Falha ao cadastrar!';

  } else {
    echo "<center>";
    echo "Quantidade atualizada com sucesso!";
    echo "</center>";
    include_once("leitorbm.php");
  }

  #$inserirconsulta = mysqli_fetch_assoc($inserir);
?>

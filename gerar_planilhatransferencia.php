<?php
if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <title>Cantinho Compras</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">



</head>
<body id="page-top">

  <?php
      if ($_SESSION['empresa'] == "1"){
       $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitortransferenciajn as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
       $leitorresult = mysqli_query($con, $leitor);

       $transferencia = "SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as entrada, t.quantidadeSaida as saida, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto FROM transferenciajn as t LEFT OUTER JOIN est004 as e ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.DESCPRODUTO order by tnome ";
       $transferenciaresult = mysqli_query($con, $transferencia);

       $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto,e.codproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciajn as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciajn as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto,e.codproduto  ";
       $result = mysqli_query($con, $sql);


       $totalsistema = 0;
       $totalleitor = 0;
    }

    if ($_SESSION['empresa'] == "2"){
     $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitortransferenciasf as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
     $leitorresult = mysqli_query($con, $leitor);

     $transferencia = "SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as entrada, t.quantidadeSaida as saida, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto FROM transferenciasf as t LEFT OUTER JOIN est004 as e ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.DESCPRODUTO order by tnome ";
     $transferenciaresult = mysqli_query($con, $transferencia);

     $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto,e.codproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciasf as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciasf as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto,e.codproduto  ";
     $result = mysqli_query($con, $sql);


     $totalsistema = 0;
     $totalleitor = 0;
  }

  if ($_SESSION['empresa'] == "5"){
   $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitortransferenciabm as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
   $leitorresult = mysqli_query($con, $leitor);

   $transferencia = "SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as entrada, t.quantidadeSaida as saida, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto FROM transferenciabm as t LEFT OUTER JOIN est004 as e ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.DESCPRODUTO order by tnome ";
   $transferenciaresult = mysqli_query($con, $transferencia);

   $sql = "SELECT t.codproduto as tcodigo,t.nome as tnome, t.quantidadeEntrada as tentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto as lcodigo,count(l.codproduto) as lqtde FROM est004 as e right  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO inner JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto,e.codproduto  UNION SELECT t.codproduto as codigo,t.nome as tnome, t.quantidadeEntrada as qtdeentrada, e.codproduto,e.CONTAPRODUTO,e.empresa,e.descproduto as descproduto, l.id,l.codproduto,count(l.codproduto) as Qtde FROM est004 as e left  JOIN leitortransferenciabm as l ON l.codproduto = e.CODPRODUTO left JOIN transferenciabm as t ON t.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by e.descproduto,e.codproduto  ";
   $result = mysqli_query($con, $sql);


   $totalsistema = 0;
   $totalleitor = 0;
}
  ?>
   <table class="table table-bordered table-dark">

      <tr border="1">
            <th colspan="4"><center><b>CANTINHO DA CEGONHA</b></center></th>
            <th colspan="1"><center><b>  <input type="button" class="btn btn-primary" value="Imprimir" onClick="window.print()"/></th></b></center></th>
            <th colspan="1"><center><b>  <a href="transferencia.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Voltar</button></a></li></b></center></th>

      </tr>
      <tr border="1">
            <th colspan="4"><center>CONFERÊNCIA DA TRANSFERÊNCIA Nº <textarea id="story" name="story" rows="1" cols="15" >

            </textarea> :
            </center></th>
            <th>
              <label for="instrumento"> DE : </label>
                    <select name="instrumento" id="instrumento">
                      <option value="trp">-</option>
                      <option value="trp">BM</option>
                      <option value="tpa">JN</option>
                      <option value="tbn">SF</option>
                    </select>
            </th>
            <th>
              <label for="instrumento"> PARA : </label>
                    <select name="instrumento" id="instrumento">
                      <option value="trp">-</option>
                      <option value="trp">BM</option>
                      <option value="tpa">JN</option>
                      <option value="tbn">SF</option>
                    </select>
            </th>
      </tr>

      <tr>

            <th colspan="2"><center>CONFERÊNCIA FEITA POR <?php echo $_SESSION['Nome'] ?> </center></th>

            <th colspan="4"><center>DATA DA CONFERÊNCIA <?php
                                        $data_cadastro = date("d-m-Y");
                                        date('d-m-Y', strtotime('NOW()'));
                                        echo $data_cadastro;
                                    ?>
              </center></th>
      </tr>
    </table>
        <table class="table table-striped table-bordered table-condensed table-hover">
      <tr border="1">

            <th colspan="2"><center>Dados do Produto</center></th>
            <th colspan="1"><center>Leitor</center></th>

            <th colspan="2"><center>Sistema</center></th>
            <th colspan="1"><center>Erros</center></th>
      </tr>
        <tr class="">
              <th>Cód</th>
              <th>Descrição</th>
              <th>QTDE</th>
              <th>Cód</th>

              <th>QTDE</th>

              <th colspan="1">Diferença</th>

        </tr>
  <?php
           while($row = mysqli_fetch_assoc($result)) {
              $leitor = mysqli_fetch_assoc($leitorresult);
              $transferencia = mysqli_fetch_assoc($transferenciaresult);
              $entrada = round($row['tentrada']);

              $totalleitor = $totalleitor + $row['lqtde'];
              $totalsistema = $entrada + $totalsistema;

              if($row['lcodigo'] > 0 or $row['tcodigo'] >0) {

                #if(($row['lcodigo'] != $row['tcodigo'])or($row['lcodigo'] = $row['tcodigo'] and $entrada != $row['lqtde'])) {

                      echo "<tr >";
                          echo "<td>" .$row['lcodigo'];"</td>";
                          if($row['lcodigo'] > 0){
                          echo "<td>" .$row['descproduto'];"</td>";
                        }else {
                          echo "<td></td>";
                        }
                          echo "<td>" .$row['lqtde'];"</td>";
                          #echo "<td>X</td>";

                          echo "<td>" .$row['tcodigo'];"</td>";
                          if($entrada > 0)
                            echo "<td>" .$entrada;"</td>";
                          if($entrada <= 0)
                              echo "<td>-</td>";
                          #echo "<td>" .$row['tnome'];"</td>";
                          if ($row['lqtde']-$entrada > 0 and $entrada > 0)
                              echo "<td> Leu ".($row['lqtde']-$entrada)." a MAIS";"</td>";
                          if ($row['lqtde']-$entrada < 0 and $entrada > 0 and $row['lcodigo'] != NULL)
                              echo "<td> Faltou ".-($row['lqtde']-$entrada);"</td>";
                          if ($row['lqtde']-$entrada == 0 and $entrada > 0)
                              echo "<td> OK </td>";
                          if ($entrada == 0)
                              echo "<td> N/C</td>";
                          if ($row['lqtde'] <= 0 and $row['lcodigo'] == NULL)
                                  echo "<td>  N/L </td>";
                      echo "</tr>";

                   }

          }
                    echo "<tr>";
                          echo "<td colspan=2><center> TOTAL DE ITENS </center></td>";
                          echo "<td> LEITOR = ".$totalleitor." </td>";
                          echo "<td> X </td>";
                          echo "<td> SISTEMA = ".$totalsistema." </td>";
                          echo "<td> Diferença = ".($totalleitor-$totalsistema)." </td>";

                    echo "</tr>";

     ?>
                    <td colspan=6>
                      <textarea id="story" name="story" rows="8" cols="150">
                           Espaço para observações:
                      </textarea>
                    </td>

    </table>
    </div>
    <p>

    </p>

<script>
function CriarPDF() {
    var minhaTabela = document.getElementById('tabela').innerHTML;
    var style = "<style>";
    style = style + "table {width: 100%;font: 10px Calibri;}";
    style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
    style = style + "padding: 2px 3px;text-align: center;}";
    style = style + "</style>";
    // CRIA UM OBJETO WINDOW
    var win = window.open('', '', 'height=700,width=700');
    win.document.write('<html><head>');
    win.document.write('<title>Confencia Transferencia</title>');   // <title> CABEÇALHO DO PDF.
    win.document.write(style);                                     // INCLUI UM ESTILO NA TAB HEAD
    win.document.write('</head>');
    win.document.write('<body>');
    win.document.write(minhaTabela);                          // O CONTEUDO DA TABELA DENTRO DA TAG BODY
    win.document.write('</body></html>');
    win.document.close(); 	                                         // FECHA A JANELA
    win.print();                                                            // IMPRIME O CONTEUDO
    }
</script>
</body>
</html>

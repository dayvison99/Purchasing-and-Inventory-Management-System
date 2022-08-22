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
  $lojas = "SELECT *,j.id as jnid,j.empresa as jnempresa,j.codproduto as jncodprduto,j.descproduto as jndescproduto,j.referencia as jnreferencia,j.estaual as jnestaual,j.estminino as jnestminino,j.estmaximo as jnestmaximo,j.difmaxest as jndifmaxest ,j.unidade as jnunidade,j.datacompra as jndatacompra,j.precofinal as jnprecofinal,j.dataalteracao as jndataalteracao, s.id as sfid,s.empresa as sfempresa,s.codproduto as sfcodprduto,s.descproduto as sfdescproduto,s.referencia as sfreferencia,s.estaual as sfestaual,s.estminino as sfestminino,s.estmaximo as sfestmaximo,s.difmaxest as sfdifmaxest ,s.unidade as sfunidade,s.datacompra as sfdatacompra,s.precofinal as sfprecofinal,s.dataalteracao as sfdataalteracao, b.id as bmid,b.empresa as bmempresa,b.codproduto as bmcodprduto,b.descproduto as bmdescproduto,b.referencia as bmreferencia,b.estaual as bmestaual,b.estminino as bmestminino,b.estmaximo as bmestmaximo,b.difmaxest as bmdifmaxest ,b.unidade as bmunidade,b.datacompra as bmdatacompra,b.precofinal as bmprecofinal,b.dataalteracao as bmdataalteracao FROM cvs as j INNER JOIN cvs2 as s ON s.codproduto = j.codproduto INNER JOIN cvs3 as b ON b.codproduto = j.codproduto INNER JOIN est004 as p ON p.CONTAPRODUTO = s.codproduto where (j.empresa = 1 and p.empresa = 1 and s.estaual > s.estminino) and (p.GRUPO !=  19 or p.GRUPO !=  49 or p.GRUPO !=  100 or p.GRUPO !=  122 or p.GRUPO !=  145 or p.GRUPO !=  157 or p.GRUPO !=  158 or p.GRUPO !=  161 or p.GRUPO !=    176 or p.GRUPO !=  208 or p.GRUPO !=  209 or p.GRUPO !=  210 or p.GRUPO !=  211 or p.GRUPO !=  212 or p.GRUPO !=  213 or p.GRUPO !=  214 or p.GRUPO !=  216 or p.GRUPO !=  1 or p.GRUPO !=  106 or p.GRUPO !=  110 or p.GRUPO !=  112 or p.GRUPO !=  12 or p.GRUPO !=  121 or p.GRUPO !=  123 or p.GRUPO !=  124 or p.GRUPO !=  125 or p.GRUPO !=  126 or p.GRUPO !=  127 or p.GRUPO !=  128 or p.GRUPO !=  130 or p.GRUPO !=  132 or p.GRUPO !=  133 or p.GRUPO !=  137 or p.GRUPO !=  138 or p.GRUPO !=  146 or p.GRUPO !=  147 or p.GRUPO !=  148 or p.GRUPO !=  149 or p.GRUPO !=  150 or p.GRUPO !=  162 or p.GRUPO !=  163 or p.GRUPO !=  164 or p.GRUPO !=  17 or p.GRUPO !=  175 or p.GRUPO !=  18 or p.GRUPO !=  199 or p.GRUPO !=  2 or p.GRUPO !=  200 or p.GRUPO !=  201 or p.GRUPO !=  202 or p.GRUPO !=  23 or p.GRUPO !=  25 or p.GRUPO !=  36 or p.GRUPO !=  37 or p.GRUPO !=  38 or p.GRUPO !=  39 or p.GRUPO !=  41 or p.GRUPO !=  45 or p.GRUPO !=  46 or p.GRUPO !=  5 or p.GRUPO !=  50 or p.GRUPO !=  55 or p.GRUPO !=  66 or p.GRUPO !=  69 or p.GRUPO !=  72 or p.GRUPO !=  74 or p.GRUPO !=  93 or p.GRUPO !=  94 or p.GRUPO !=  96 or p.GRUPO !=  97 or p.GRUPO !=  98) order by j.descproduto";
  $lojasresult = mysqli_query($con, $lojas);

  if($lojas === FALSE) {
    // Consulta falhou, parar aqui
    die(mysqli_error());
  }
  ?>

      <!-- Page Wrapper -->
    <div id="wrapper">

      <div class="jumbotron" id="tabela"><center>
        <table id="tabela" class="table table-striped table-bordered table-condensed table-hover" title="Balanceamento!">
           <tr >
             <th colspan="3"></th>
             <th><a class="btn btn-primary" href="sugestaosf.php">Voltar</a></th>
             <th colspan=""><a href="imprimirsf-jn-excel.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Gerar Excel</button></a></li></th>
             <th><a class="btn btn-primary" onclick="CriaPDF()" href="sugestaosf.php">Imprimir</a></th>

          </tr>
           <tr >

            <th>Cód</th>
            <th>Descrição</th>
            <th>Minimo SF</th>
            <th>Excendentes SF</th>
            <th>Minimo JN</th>
            <th>Para JN</th>

        </tr>
        <?php
                 while($rowjn = mysqli_fetch_assoc($lojasresult)) {

                    $rowsf = $rowjn;
                    $rowbm = $rowjn;
                    $difjn = $rowjn['jnestaual']-$rowjn['jnestminino'];
                    $difsf = $rowsf['sfestaual']-$rowsf['sfestminino'];
                    $difbm = $rowbm['bmestaual']-$rowbm['bmestminino'];

                    if ($rowsf['sfestaual'] > $rowsf['sfestminino'] and $rowjn['jnestaual'] < $rowjn['jnestminino']){
                    #cabecario jn
                    echo "<tr >";
                    echo "<td>" .$rowsf['sfcodprduto'];"</td>";
                    echo "<td>" .$rowsf['sfdescproduto'];"</td>";
                    echo "<td>" .$rowsf['sfestminino'];"</td>";


                    #se estoque de atual de jn for maior que o estoque minino

                      echo "<td>" .$difsf;"</td>";
                      echo "<td>" .$rowjn['jnestminino'];"</td>";

                    }
                    #else{
                      #echo "<td>-</td>";
                    #}


                    #se estoque de atual de SF for maior que o estoque minino e estoque de jn atual for menor qu o minino
                    if ($rowjn['jnestaual'] < $rowjn['jnestminino'] and $rowsf['sfestaual'] > $rowsf['sfestminino']){
                          if ($difsf >= $rowjn['jnestminino'] - $rowjn['jnestaual']){
                              echo "<td>" .($rowjn['jnestminino'] -$rowjn['jnestaual']);"</td>";
                              $_SESSION['SFJN1'] = $rowjn['jnestminino'] -$rowjn['jnestaual'] ;


                              }
                          if ($difsf < $rowjn['jnestminino'] - $rowjn['jnestaual']){
                              echo "<td>" .($difsf);"</td>";
                              $_SESSION['SFJN'] = $difsf;



                            }
                      }
                     #else{
                      #        echo "<td>-</td>";

                    #  }
                  }
           ?>
    </table>
    </div>
    <p>

    </p>

<script>
function CriaPDF() {
    var minhaTabela = document.getElementById('tabela').innerHTML;
    var style = "<style>";
    style = style + "table {width: 100%;font: 14px Calibri;}";
    style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
    style = style + "padding: 2px 3px;text-align: center;}";
    style = style + "</style>";
    // CRIA UM OBJETO WINDOW
    var win = window.open('', '', 'height=700,width=700');
    win.document.write('<html><head>');
    win.document.write('<title>Balanceamento São Francisco para Januária</title>');   // <title> CABEÇALHO DO PDF.
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

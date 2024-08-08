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
        $marca = $_SESSION['marca'];
        $jn = "SELECT j.empresa,j.codproduto,j.descproduto,j.estaual,j.estmaximo,j.precofinal,p.ID, p.EMPRESA, p.CODPRODUTO, p.CONTAPRODUTO, p.DESCPRODUTO, p.GRUPO, p.SUBGRUPO, p.MARCA, p.ESTMINIMO, p.ESTMAXIMO FROM cvs as j INNER JOIN est004 as p ON p.CONTAPRODUTO = j.codproduto and j.empresa = p.EMPRESA where (p.MARCA = '$marca' and j.empresa = 1 and p.EMPRESA = 1) and (p.GRUPO =  78 or  p.GRUPO =  52 or  p.GRUPO =  170 or  p.GRUPO =  171 or  p.GRUPO =  172 or  p.GRUPO =  173 or  p.GRUPO =  174 or  p.GRUPO =  179 or  p.GRUPO =  181 or  p.GRUPO =  183 or  p.GRUPO =  184 or  p.GRUPO =  185 or  p.GRUPO =  186 or  p.GRUPO =  187 or  p.GRUPO =  188 or  p.GRUPO =  207 or  p.GRUPO =  10 or  p.GRUPO =  104 or  p.GRUPO =  107 or  p.GRUPO =  11 or  p.GRUPO =  111 or  p.GRUPO =  114 or  p.GRUPO =  117 or  p.GRUPO =  119 or  p.GRUPO =  120 or  p.GRUPO =  13 or  p.GRUPO =  139 or  p.GRUPO =  14 or  p.GRUPO =  141 or  p.GRUPO =  142 or  p.GRUPO =  15 or  p.GRUPO =  159 or  p.GRUPO =  16 or  p.GRUPO =  160 or  p.GRUPO =  165 or  p.GRUPO =  166 or  p.GRUPO =  167 or  p.GRUPO =  168 or  p.GRUPO =  169 or  p.GRUPO =  177 or  p.GRUPO =  178 or  p.GRUPO =  180 or  p.GRUPO =  182 or  p.GRUPO =  19 or  p.GRUPO =  21 or  p.GRUPO =  26 or  p.GRUPO =  3 or  p.GRUPO =  30 or  p.GRUPO =  31 or  p.GRUPO =  32 or  p.GRUPO =  33 or  p.GRUPO =  35 or  p.GRUPO =  4 or  p.GRUPO =  40 or  p.GRUPO =  53 or  p.GRUPO =  54 or  p.GRUPO =  56 or  p.GRUPO =  57 or  p.GRUPO =  59 or  p.GRUPO =  62 or  p.GRUPO =  63 or  p.GRUPO =  64 or  p.GRUPO =  65 or  p.GRUPO =  7 or  p.GRUPO =  71 or  p.GRUPO =  73 or  p.GRUPO =  75 or  p.GRUPO =  77 or  p.GRUPO =  8 or  p.GRUPO =  82 or  p.GRUPO =  83 or  p.GRUPO =  85 or  p.GRUPO =  88 or  p.GRUPO =  9 or  p.GRUPO =  90) order by j.descproduto";
        $jnresult = mysqli_query($con, $jn);

        $estmarca = "SELECT * FROM est017 where MARCACONTADOR = '$marca'";
        $estmarcaresult = mysqli_query($con, $estmarca);


  if($jn === FALSE) {
          // Consulta falhou, parar aqui
          die(mysqli_error());
  }

      ?>



      <!-- Page Wrapper -->
    <div id="wrapper">

      <div class="jumbotron" id="tabela"><center>
        <table id="tabela" class="table table-striped table-bordered table-condensed table-hover" title="Balanceamento!">
           <tr >
             <th></th>
             <?php
                      while($marcajn = mysqli_fetch_assoc($estmarcaresult)) {
                          echo "<td>" .$marcajn['DESCMARCA'];"</td>";
                          break;
                      }
              ?>


             <th></th>
             <th></th>
             <th><a class="btn btn-primary" href="marcasjn.php">Voltar</a></th>
             <th><a class="btn btn-primary" onclick="CriaPDF()" href="marcasjn.php">Imprimir</a></th>

          </tr>

          <tr>
            <th>Cód</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Est Atual</th>
            <th>Est Maximo</th>
            <th>Sugestão</th>
           </tr>
    <?php
             while($rowjn = mysqli_fetch_assoc($jnresult)) {

                $difjn = $rowjn['estaual']-$rowjn['estmaximo'];
                if($rowjn['estaual'] < $rowjn['estmaximo']){
                #cabecario jn
                echo "<tr>";
                echo "<td>" .$rowjn['codproduto'];"</td>";
                echo "<td>" .$rowjn['descproduto'];"</td>";
                echo "<td>R$ " .$rowjn['precofinal'];"</td>";
                echo "<td>" .$rowjn['estaual'];"</td>";
                echo "<td>" .$rowjn['estmaximo'];"</td>";

                if ($rowjn['estaual'] >= $rowjn['estmaximo'] ){
                    echo "<td>-</td>";


                }
                else{
                  #echo "<td> aa" .$rowjn['resultado'];"</td>";
                  echo "<td>" .-$difjn;"</td>";

                }
                echo "</tr>";
}

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
    style = style + "table {width: 100%;font: 10px Calibri;}";
    style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
    style = style + "padding: 2px 3px;text-align: center;}";
    style = style + "</style>";
    // CRIA UM OBJETO WINDOW
    var win = window.open('', '', 'height=700,width=700');
    win.document.write('<html><head>');
    win.document.write('<title>Lista de Compras Januária</title>');   // <title> CABEÇALHO DO PDF.
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

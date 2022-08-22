<?php
require("layout/topo.php");
require("layout/menu.php");

$sql = "SELECT * FROM funcionarios order by nome";
$result = mysqli_query($con, $sql);

// $_SESSION["pontodata"]

$data = $_POST["data"];

$array = explode("-", $data);
$dia = $array[2];
$mes = $array[1];
$ano = $array[0];

$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

 $diasemana_numero = date('w', time());

$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro','Dezembro');

$diasemana_numero = date('w', strtotime($data));

$tm = substr($mes, 1, 2);

?>

<div class="jumbotron"><center>

  <legend class="legend-border"><h4>  Mês de <?php echo $meses[$tm-1] ?> </h4></legend>
  <form action="listaponto.php" method="post" class="form">
    <div class="form-group input-group col-xs-7" >
    </div>


    <table id="tabela"  title="caderno de ponto!" border="1px">
<?php   while($row = mysqli_fetch_assoc($result)){ ?>
      <tr>
      </tr>  
      <tr >
        <th colspan="7">FUNCIONÁRIO :

        <?php  echo $row['nome'];
        ?>


       </th>
     </tr>

     <tr border="1px" >
        <th>Dia</th>
        <th>Hora Entrada</th>
        <th>Assinatura</th>
        <th>Saída</th>
        <th>Entrada</th>
        <th>Assinatura</th>
        <th>Hora Saída</th>
      </tr>

        <?php
          $cont = 0;
           while($cont <=30){
           ?>
      <tr>
        <td>
        <?php  echo  $dia+$cont ;?>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

        <?php
        $cont++;
      } ?>

      </tr>
      <?php } ?>
        <!-- <th><a href="imprimirjn-sf.php" id="sf"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Para SF</button></a></li></th> -->
        <!-- <th><a href="imprimirjn-bm.php" id="sf"><i class="ion-help"></i> <button type="button" class="btn btn-success">Para BM</button></a></li></th> -->
      </tr>
      <tr>

      </table>
      <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="CriaPDF()" >Imprimir Caderno de Ponto</button>
    </p>

    </div>




<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Cantinho  2021</span>
    </div>
  </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Sair do Sistema?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Deseja Realmente Sair do Sistema?</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
      <a class="btn btn-primary" href="logout.php">Sim</a>
    </div>
  </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->

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
    win.document.write('<title>Cantinho Da Cegonha</title>');   // <title> CABEÇALHO DO PDF.
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

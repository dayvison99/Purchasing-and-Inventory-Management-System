<?php

include_once("conexao.php");

if(!isset($_SESSION)){
        session_start();
      }


      $grupo = $_SESSION['salvargrupo'];
      $cidade = $_SESSION['salvarcidade'] ;
      $usuario = $_SESSION['salvarusuario'] ;
      $data = $_SESSION['salvardata'];
      $leitor = $_SESSION['salvarleitor'];
      $sistema = $_SESSION['salvarsistema'];
      $diferenca = $sistema - $leitor;
      $porcentagem = round(($leitor*100)/$sistema,2);
      $alter = "INSERT INTO salvarconferencia (`grupo`,`cidade`,`usuario`,`data`,`leitor`,`sistema`,`diferenca`,`porcentagem`) VALUES ('$grupo','$cidade','$usuario','$data','$leitor','$sistema','$diferenca','$porcentagem')";
      $inserir = mysqli_query($con, $alter );

      $salvar = "SELECT * FROM salvarconferencia order by id desc";
      $salvarresult = mysqli_query($con, $salvar);

      $rowresult = mysqli_fetch_assoc($salvarresult);

      echo $rowresult["id"];


  #  echo "<script>
  #  window.alert(' Antes de fazer a leitura faça a importação da entrada!')
  #  </script>";
  #  }

  if($_SESSION['empresa'] == 1){
           $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitorconferenciajn as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
           $leitorresult = mysqli_query($con, $leitor);

           $sql = "SELECT e.codproduto as tcodigo,e.DESCPRODUTO as tnome, e.estoque as tentrada, l.id,l.codproduto as lcodigo,l.quantidade as lqtde FROM auxestoquejn as e left JOIN leitorconferenciajn as l ON l.codproduto = e.CONTAPRODUTO group by tcodigo UNION SELECT e.codproduto as tcodigo,e.DESCPRODUTO as tnome, e.estoque as tentrada, l.id,l.codproduto  as lcodigo,l.quantidade  as lqtde FROM auxestoquejn as e inner  JOIN leitorconferenciajn as l ON l.codproduto = e.CONTAPRODUTO group by lcodigo ";
           $result = mysqli_query($con, $sql);

           $totalsistema = 0;
           $totalleitor = 0;
  }
  if($_SESSION['empresa'] == 2){
         $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitorconferenciasf as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
         $leitorresult = mysqli_query($con, $leitor);

         $sql = "SELECT e.codproduto as tcodigo,e.DESCPRODUTO as tnome, e.estoque as tentrada, l.id,l.codproduto as lcodigo,l.quantidade as lqtde FROM auxestoquesf as e left JOIN leitorconferenciasf as l ON l.codproduto = e.CONTAPRODUTO group by tcodigo UNION SELECT e.codproduto as tcodigo,e.DESCPRODUTO as tnome, e.estoque as tentrada, l.id,l.codproduto  as lcodigo,count(l.codproduto) as lqtde FROM auxestoquesf as e inner  JOIN leitorconferenciasf as l ON l.codproduto = e.CONTAPRODUTO group by tcodigo ";
         $result = mysqli_query($con, $sql);

         $totalsistema = 0;
         $totalleitor = 0;
  }
  if($_SESSION['empresa'] == 5){
       $leitor = "SELECT e.CODPRODUTO,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitorconferenciabm as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 group by l.codproduto order by descricao  ";
       $leitorresult = mysqli_query($con, $leitor);

       $sql = "SELECT e.codproduto as tcodigo,e.DESCPRODUTO as tnome, e.estoque as tentrada, l.id,l.codproduto as lcodigo,l.quantidade as lqtde FROM auxestoquebm as e left JOIN leitorconferenciabm as l ON l.codproduto = e.CONTAPRODUTO group by tcodigo UNION SELECT e.codproduto as tcodigo,e.DESCPRODUTO as tnome, e.estoque as tentrada, l.id,l.codproduto  as lcodigo,count(l.codproduto) as lqtde FROM auxestoquebm as e inner  JOIN leitorconferenciabm as l ON l.codproduto = e.CONTAPRODUTO group by tcodigo ";
       $result = mysqli_query($con, $sql);

       $totalsistema = 0;
       $totalleitor = 0;
  }

           while($row = mysqli_fetch_assoc($result)) {
              $leitor = mysqli_fetch_assoc($leitorresult);
            #  $transferencia = mysqli_fetch_assoc($transferenciaresult);
              $entrada = round($row['tentrada']);

              $totalleitor = $totalleitor + $row['lqtde'];
              $totalsistema = $entrada + $totalsistema;

              if($row['lcodigo'] > 0 or $row['tcodigo'] >0) {

                      $sistemacodigo = $row['tcodigo'];
                          if($row['lcodigo'] >= 0){
                            $sistemanome = $row['tnome'];
                          }else {
                           $sistemanome = "-";
                        }
                          $leitorqtde = $row['lqtde'];

                          $sistemacodigo = $row['tcodigo'];
                          if($entrada > 0)
                            $totalentrada = $entrada;
                          if($entrada <= 0)
                            $totalentrada = 0;
                          #echo "<td>" .$row['tnome'];"</td>";
                          if ($row['lqtde']-$entrada > 0 and $entrada > 0)
                              $erro = "Leu ".($row['lqtde']-$entrada)." a MAIS";
                          if ($row['lqtde']-$entrada < 0 and $entrada > 0 and $row['lcodigo'] != NULL)
                              $erro = "Faltou ".-($row['lqtde']-$entrada);
                          if ($row['lqtde']-$entrada == 0 and $entrada > 0)
                              $erro = " OK ";
                          if ($entrada == 0)
                              $erro = " N/C ";
                          if ($row['lqtde'] <= 0 and $row['lcodigo'] == NULL)
                              $erro = "  N/L ";
                      echo "</tr>";

                   }
                   $idconferencia = $rowresult["id"];
                   $alter = "INSERT INTO salvarconferenciaprodutos(`codsistema`,`descrisistema`,`quantidadesistema`,`codleitor`,`quantidadesleitor`,`erros`,`idconferencia`) VALUES ('$sistemacodigo','$sistemanome','$entrada','$sistemacodigo','$leitorqtde','$erro','$idconferencia')";
                   $inserir = mysqli_query($con, $alter );

          }






include_once("listarconferencia.php");

?>



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
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

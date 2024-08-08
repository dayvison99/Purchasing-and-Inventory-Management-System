
<?php
    require("layout/topo.php");
    require("layout/menu.php");
if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

$cidade = strtoupper($_POST["cidade"]) ;
$dateinicial = strtoupper($_POST["dateinicial"]);
$datefinal = strtoupper($_POST["datefinal"]);

$_SESSION['dateinicial'] = $dateinicial;
$_SESSION['cidadeconferir'] = $cidade;
$_SESSION['datefinal'] = $datefinal;
$usuario = $_SESSION['UsuarioID'];

    try{
        require_once 'GetDadosVendas.php';
        require_once 'GetDadosClientes.php';
        // Atribui o conteúdo do resultado para variável $arquivo
        $vendas = $resultvendas;
        $clientes = $resultclientes;
        $jsonvendas = json_decode($vendas);
        $jsonclientes = json_decode($clientes);

        $resultvendas = "DELETE FROM `vendas` WHERE empresa = $cidade";
        $queryresultvendas = mysqli_query($con, $resultvendas);
        $zerarvendas = "ALTER TABLE `vendas` AUTO_INCREMENT=1";
        $queryresultproduto = mysqli_query($con, $zerarvendas);

        // Loop para percorrer o Objeto
        //grupo

        foreach($jsonvendas->LJSISTEMAS as $vendas):
            $empresa    = $vendas->EMPRESA;
            $codcliente = $vendas->CLIENTE;
            $totalvenda = $vendas->TOTVENDA;
            $datavenda  = date('Y-m-d', strtotime(str_replace("/", "-", $vendas->DTVENDA)));

            $resultvendassalvar = "INSERT INTO vendas(`idcliente`,`datavenda`,`valor`,`empresa`,`usuario`) VALUES ('$codcliente','$datavenda','$totalvenda','$empresa','$usuario')";
            $queryresultprodutojn = mysqli_query($con, $resultvendassalvar);

            if ($resultvendassalvar == FALSE ){
               echo "Erro na atualização dos Dados";
               echo "</br>";
            }
          endforeach;
          if($jsonclientes){
            foreach($jsonclientes->LJSISTEMAS as $clientes):
                $empresa    = $clientes->EMPRESA;
                $codcliente = $clientes->CLICONTADOR;
                $nome       = $clientes->NOME;
                $celular    = $clientes->CELULAR;
                $celular2   = $clientes->CELULAR2;
                $celular3   = $clientes->CELULAR3;
                $telefone   = $clientes->FONE;
                $dtcadastro = date('Y-m-d', strtotime(str_replace("/", "-", $clientes->DTCADASTRO)));
                $dtaniversario = date('Y-m-d', strtotime(str_replace("/", "-", $clientes->DTNASC)));

                $resultvendassalvar = "INSERT INTO clientes(`nome`,`celular`,`telefone`,`celular2`,`celular3`,`empresa`,`codcliente`,`dtcadastro`,`dtaniversario`) VALUES ('$nome','$celular','$telefone','$celular2','$celular3','$empresa','$codcliente','$dtcadastro','  $dtaniversario')";
                $queryresultprodutojn = mysqli_query($con, $resultvendassalvar);

                if ($resultvendassalvar == FALSE ){
                   echo "Erro na atualização dos Dados";
                   echo "</br>";
                }
              endforeach;
          }

    require_once 'lj/SetStatus.php';
    } catch (Exception $e) {
        echo 'Erro ao conectar com o servidor! ';//,  $e->getMessage(), "\n";
    }

?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4>Atualização de Dados </h4>
        </div>

            <p/>

<!-- Estilo dos botoes-->
<style>
    .pequeno {
       width: 20%;
     }

   .medio {
       width: 100%;
   }
 </style>

 <section class="row">
   <div class="col-xl-12">
   <table class="table_painel">
     <tr>
       <th>

<?php




         ?>
         <div class="progress">
           <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
         </div>

     <?php
   #}
  #

 ?>

         </td>

       </tr>
       <tr>
       <th colspan="1"><center><b>  <a href="resultadovendasclientes.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Continuar</button></a></li></b></center></th>
     </tr>
     </table>
 </div>
 </section>


        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->

                            </div>

                        </div>
                    </div>
                </div>
        </div>
          </div>
        <!-- Content Row -->



<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Cantinho  2024</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

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
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>





?>

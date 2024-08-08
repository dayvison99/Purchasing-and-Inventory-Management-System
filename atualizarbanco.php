
<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>
<script>
alert("ATENÇÃO, VOCÊ ATUALIZOU APENAS OS CADASTROS DE PRODUTOS, MARCAS, GRUPOS E SUBGRUPOS!");
</script>

<?php
if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

//Instalar a extensão SOAP no php
//1º Localize o arquivo php.ini na pasta bin do apache: apache/bin/php.ini
//2º Remover o ‘;‘ do início de extension=php_soap.dll
//3º Reinicie o servidor http
    try{

        require_once 'lj/GetGrupo.php';
        require_once 'lj/GetMarcas.php';
        require_once 'lj/GetSubGrupos.php';
        require_once 'lj/GetDadosProdutosjn.php';
        require_once 'lj/GetDadosProdutossf.php';
        require_once 'lj/GetDadosProdutosbm.php'; 
        require_once 'lj/GetDadosProdutosmaimai.php';

        // Atribui o conteúdo do resultado para variável $arquivo
        $grupo = $result;
        $marca = $resultmarcas;
        $subgrupo = $resultsubgrupo;

        $produtosjn = $resultprodutosjn;
        $produtossf = $resultprodutossf;
        $produtosbm = $resultprodutosbm;
        $produtosmaimai = $resultprodutosmaimai;

        #print_r($resultmarcas);

        // Decodifica o formato JSON e retorna um Objeto

        $jsongrupo = json_decode($grupo);
        $jsonmarca = json_decode($marca);
        $jsonsubgrupo = json_decode($subgrupo);

        $jsonprdutosjn = json_decode($produtosjn);
        $jsonprdutossf = json_decode($produtossf);
        $jsonprdutosbm = json_decode($produtosbm);
        $jsonprdutosmaimai = json_decode($produtosmaimai);


         $result = "DELETE FROM `est002`";
         $queryresult = mysqli_query($con, $result);
         $zerar = "ALTER TABLE `est002` AUTO_INCREMENT=1";
         $queryresult = mysqli_query($con, $zerar);

         $resultsubgrupo = "DELETE FROM `est003`";
         $queryresultsubgrupo = mysqli_query($con, $resultsubgrupo);
         $zerarsubgrupo = "ALTER TABLE `est003` AUTO_INCREMENT=1";
         $queryresultsubgrupo = mysqli_query($con,  $zerarsubgrupo);

         $resultmarca = "DELETE FROM `est017`";
         $queryresultsubgrupo = mysqli_query($con, $resultmarca);
         $zerarmarca = "ALTER TABLE `est017` AUTO_INCREMENT=1";
         $queryresultsubgrupo = mysqli_query($con,   $zerarmarca);

         $ultimoproduto = "SELECT max(CODPRODUTO) as CODPRODUTO  FROM est004";
         $queryultimoproduto = mysqli_query($con, $ultimoproduto);
         $row = mysqli_fetch_assoc($queryultimoproduto);
         $ultimoproduto = $row['CODPRODUTO'];

         $resultproduto = "DELETE FROM `est004` where CODPRODUTO >= 96799 "; 
         $queryresultproduto = mysqli_query($con, $resultproduto);
         $zerarproduto = "ALTER TABLE `est004` AUTO_INCREMENT=1";
         $queryresultproduto = mysqli_query($con, $zerarproduto);

        // Loop para percorrer o Objeto
        //grupo
         foreach($jsongrupo->LJSISTEMAS as $grupo):
            $empresa = $grupo->EMPRESA;
            $grupocontador = $grupo->GRUPOCONTADOR;
            $descricao = $grupo->DESCGRUPO;
            $result = "INSERT INTO est002(`EMPRESA`,`GRUPOCONTADOR`, `DESCGRUPO`) VALUES ('$empresa','$grupocontador','$descricao')";
            $queryresult = mysqli_query($con, $result);
          endforeach;

          //subgrupo
          foreach($jsonsubgrupo->LJSISTEMAS as $subgrupo):
            $empresa = $subgrupo->EMPRESA;
            $grupocontador = $subgrupo->GRUPOCONTA;
            $subgrupocontador = $subgrupo->SUBGCONTADOR;
            $descricao = $subgrupo->DESCSUBG;
            $resultsubgrupo = "INSERT INTO est003(`EMPRESA`,`GRUPOCONTA`,`SUBGCONTADOR`,`DESCSUBG`) VALUES ('$empresa','$grupocontador','$subgrupocontador','$descricao')";
            $queryresultsubgrupo = mysqli_query($con, $resultsubgrupo);
          endforeach;

          //marca
        foreach($jsonmarca->LJSISTEMAS as $marca):
            $empresa = $marca->EMPRESA;
            $marcacontador = $marca->MARCACONTADOR;
            $descricao = $marca->DESCMARCA;
            $resultmarca = "INSERT INTO est017(`EMPRESA`,`MARCACONTADOR`,`DESCMARCA`) VALUES ('$empresa','$marcacontador','$descricao')";
            $queryresultmarca = mysqli_query($con, $resultmarca);
        endforeach;

        foreach($jsonprdutosjn->LJSISTEMAS as $produtos):
            $empresa = $produtos->EMPRESA;
            $codproduto = $produtos->CODPRODUTO;
            $contaproduto = $codproduto/1;
            $descricao = $produtos->DESCPRODUTO;
            $grupo = $produtos->GRUPO;
            $subgrupo = $produtos->SUBGRUPO;
            $marca = $produtos->MARCA;


            $resultprodutojn = "INSERT INTO est004(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca')";
            $queryresultprodutojn = mysqli_query($con, $resultprodutojn);

          endforeach;

          foreach($jsonprdutossf->LJSISTEMAS as $produtos):
            $empresa = $produtos->EMPRESA;
            $codproduto = $produtos->CODPRODUTO;
            $contaproduto = $codproduto/1;
            $descricao = $produtos->DESCPRODUTO;
            $grupo = $produtos->GRUPO;
            $subgrupo = $produtos->SUBGRUPO;
            $marca = $produtos->MARCA;


            $resultprodutosf = "INSERT INTO est004(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca')";
            $queryresultprodutosf = mysqli_query($con, $resultprodutosf);

          endforeach;

          foreach($jsonprdutosbm->LJSISTEMAS as $produtos):
            $empresa = $produtos->EMPRESA;
            $codproduto = $produtos->CODPRODUTO;
            $contaproduto = $codproduto/1;
            $descricao = $produtos->DESCPRODUTO;
            $grupo = $produtos->GRUPO;
            $subgrupo = $produtos->SUBGRUPO;
            $marca = $produtos->MARCA;


            $resultprodutobm = "INSERT INTO est004(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca')";
            $queryresultprodutobm = mysqli_query($con, $resultprodutobm);

          endforeach;

          foreach($jsonprdutosmaimai->LJSISTEMAS as $produtos):
            $empresa = $produtos->EMPRESA;
            $codproduto = $produtos->CODPRODUTO;
            $contaproduto = $codproduto/1;
            $descricao = $produtos->DESCPRODUTO;
            $grupo = $produtos->GRUPO;
            $subgrupo = $produtos->SUBGRUPO;
            $marca = $produtos->MARCA;


            $resultprodutomaimai = "INSERT INTO est004(`EMPRESA`,`CODPRODUTO`,`CONTAPRODUTO`,`DESCPRODUTO`,`GRUPO`,`SUBGRUPO`,`MARCA`) VALUES ('$empresa','$codproduto','$contaproduto','$descricao','$grupo','$subgrupo','$marca')";
            $queryresultprodutomaimai = mysqli_query($con, $resultprodutomaimai);

          endforeach;



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
     if ($queryresult and $queryresultmarca and $queryresultsubgrupo and $queryresultprodutobm and $queryresultprodutojn and $queryresultprodutosf  and $queryresultprodutomaimai){
         echo "Dados Atualizados com Sucesso !";

         ?>
         <div class="progress">
           <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
         </div>

     <?php
   }
     else{
        echo "Erro na atualização dos Dados";
         echo "</br>";

 }

 ?>

         </td>
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

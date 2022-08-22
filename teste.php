<?php
    require("layout/topo.php");
    require("layout/menu.php");

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5>Conferir Entradas</h5>
                    </div>


                    <!-- Content Row -->
                    <div class="row col-xs-1">



                    <br/>
<br/>
<div class="form-group col-xs-1">
<form action='valida_compras.php' method='post' name="formgrupo">

</div><br/><br/>

        <table class="table table-striped table-bordered table-condensed table-hover">
          <tr class="">
              <th>Codigo</th>
              <th>Descrição</th>
              <th>Leu</th>
              <th>Entrada</th>
              <th>Alterar Qtde</th>
              <th>Excluir</th>
         </tr>
         <tr>
           <?php

$servidor = '127.0.0.1:C:\inetpub/estoque.fdb';

//conexão com o banco, se der erro mostrara uma mensagem.
// if (!($dbh=ibase_connect($servidor, 'SYSDBA', 'masterkey')))
     // die('Erro ao conectar com a base de dados: ' .  ibase_errmsg());

//Instruções SQL

#$sql = 'SELECT * FROM ';
//Executa a instrução SQL
#$query= ibase_query ($dbh, $sql);

//gera um loop com as linhas encontradas

// while ($row = ibase_fetch_object ($query)) {
 //$FILIAL = $row->COD_FILIAL;
 #$SALDO = $row->SALDO>'0';
 #$filial = $row->FILIAL>'3';
 #$teste = $saldo = $filial;

 #$produto = $row->PRODUTO;
 #$cor = $row->COR;
 #$BARRA = $row->BARRA;

 // $cBarracEstoque = $BARRA + $produto + $cor;


// RESULTADO DA CONSULTA
// echo "$cBarracEstoque;$teste<br>";
// }

// ibase_free_result($query);//Libera a memoria usada

// ibase_close($dbh);//fecha conexão com o firebird

?>
</tr>

</table>




</div>
                          </div>
                            </div>


</div>
</div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Cantinho  2021</span>
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

<?php
require("layout/topo.php");
require("layout/menu.php");
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5>Divergências De Estoque</h5>
        <a class="btn btn-primary" href="leitorbm.php">Continuar Leitura</a>
        <a href="gerar_planilhaconferencia.php" id="jn"><i class="ion-help"></i> <button type="button" class="btn btn-primary">Imprimir Conferência</button></a></li>
    </div>
    <div class="row col-xs-1">
        <br />
        <br />
        <div class="form-group col-xs-1">
        </div>
        <br /><br />
        <div class="form-group col-xs-6">
        </div><br /><br />
        <?php
        $usuario = $_SESSION['UsuarioID'];
        if ($_SESSION['empresa'] == 1) {
            $leitor = "SELECT e.CODPRODUTO  as CONTAP,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitorconferenciajn as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.usuario = $usuario group by l.codproduto order by descricao  ";
            $leitorresult = mysqli_query($con, $leitor);

            $sql = "SELECT e.ESTOQUE,e.CODPRODUTO as CONTAP,e.DESCPRODUTO as descricao, l.id,l.codproduto as lcodigo,  l.quantidade as lqtde FROM auxestoquejn as e left JOIN leitorconferenciajn as l ON l.codproduto = e.CODPRODUTO  and l.usuario = $usuario  where e.usuario = $usuario group by  e.DESCPRODUTO,l.codproduto";
            $resultsql = mysqli_query($con, $sql);

            $produtos = "SELECT  * FROM est004 where EMPRESA = 1";
            $produtosresult = mysqli_query($con, $produtos);
        }
        if ($_SESSION['empresa'] == 2) {
            $leitor = "SELECT e.CODPRODUTO  as CONTAP,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitorconferenciasf as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.usuario = $usuario group by l.codproduto order by descricao  ";
            $leitorresult = mysqli_query($con, $leitor);

            $sql = "SELECT e.ESTOQUE,e.CODPRODUTO as CONTAP,e.DESCPRODUTO as descricao, l.id,l.codproduto as lcodigo,  l.quantidade as lqtde FROM auxestoquesf as e left JOIN leitorconferenciasf as l ON l.codproduto = e.CODPRODUTO  and l.usuario = $usuario  where e.usuario = $usuario group by  e.DESCPRODUTO,l.codproduto";
            $resultsql = mysqli_query($con, $sql);

            $produtos = "SELECT  * FROM est004 where EMPRESA = 1";
            $produtosresult = mysqli_query($con, $produtos);
        }
        if ($_SESSION['empresa'] == 5) {
            $leitor = "SELECT e.CODPRODUTO  as CONTAP,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitorconferenciabm as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.usuario = $usuario group by l.codproduto order by descricao  ";
            $leitorresult = mysqli_query($con, $leitor);

            $sql = "SELECT e.ESTOQUE,e.CODPRODUTO as CONTAP,e.DESCPRODUTO as descricao, l.id,l.codproduto as lcodigo,  l.quantidade as lqtde FROM auxestoquebm as e left JOIN leitorconferenciabm as l ON l.codproduto = e.CODPRODUTO  and l.usuario = $usuario  where e.usuario = $usuario group by  e.DESCPRODUTO,l.codproduto";
            $resultsql = mysqli_query($con, $sql);

            $produtos = "SELECT  * FROM est004 where EMPRESA = 1";
            $produtosresult = mysqli_query($con, $produtos);
        }
        if ($_SESSION['empresa'] == 6) {
            $leitor = "SELECT e.CODPRODUTO  as CONTAP,e.CONTAPRODUTO,e.DESCPRODUTO as descricao, l.CODPRODUTO as codigo, count(l.codproduto) as quantidade FROM est004 as e INNER JOIN leitorconferenciamaimai as l ON l.codproduto = e.CONTAPRODUTO where e.empresa = 1 and l.usuario = $usuario group by l.codproduto order by descricao  ";
            $leitorresult = mysqli_query($con, $leitor);

            $sql = "SELECT e.ESTOQUE,e.CODPRODUTO as CONTAP,e.DESCPRODUTO as descricao, l.id,l.codproduto as lcodigo,  l.quantidade as lqtde FROM auxestoquebm as e left JOIN leitorconferenciamaimai as l ON l.codproduto = e.CODPRODUTO  and l.usuario = $usuario  where e.usuario = $usuario group by  e.DESCPRODUTO,l.codproduto";
            $resultsql = mysqli_query($con, $sql);

            $produtos = "SELECT  * FROM est004 where EMPRESA = 1";
            $produtosresult = mysqli_query($con, $produtos);
        }
        ?>
        <table class="table table-striped table-bordered table-condensed table-hover">
            <tr border="1">
                <th colspan="3">
                    <center>Dados do Leitor</center>
                </th>
                <th>
                    <center>-</center>
                </th>
                <th colspan="2">
                    <center>Dados do Sistema</center>
                </th>
                <th>
                    <center>Erros</center>
                </th>
            </tr>
            <tr class="">
                <th>Cód</th>
                <th>Descrição</th>
                <th>QTDE</th>
                <th> - </th>
                <th>Cód</th>
                <th>QTDE</th>
                <th>Diferença</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($resultsql)) {
                $entrada = round($row['ESTOQUE']);
                if ($row['lqtde'] != $entrada) {
                    if ($row['lcodigo'] > 0) {
                        echo "<td>" . $row['lcodigo'];
                        "</td>";
                    } else {
                        echo "<td><center>X</td>";
                    }
                    if ($row['descricao'] == "") {
                        echo $row['descricao'];
                        echo "a";
                        echo "<td bgcolor=666>PRODUTO NÃO FAZ PARTE DO GRUPO</td>";
                    } else {
                        echo "<td>" . $row['descricao'];
                        "</td>";
                    }

                    echo "<td>" . $row['lqtde'];
                    "</td>";
                    echo "<td>-</td>";
                    echo "<td>" . $row['CONTAP'];
                    "</td>";

                    echo "<td>" . $entrada;
                    "</td>";

                    if ($row['lqtde'] > $entrada and $row['descricao'] == "")
                        echo "<td> N/C</td>";

                    if ($row['lqtde'] > $entrada and $row['descricao'] != "")
                        echo "<td> Leu " . ($row['lqtde'] - $entrada) . " a MAIS";
                    "</td>";

                    if ($row['lqtde'] < $entrada and $row['lcodigo'] <= 0)
                        echo "<td> N/L </td>";

                    if ($row['lqtde'] < $entrada and $row['lcodigo'] > 0)
                        echo "<td> Faltou " . - ($row['lqtde'] - $entrada);
                    "</td>";

                    if ($row['lqtde'] == $entrada)
                        echo "<td>Correto</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Cantinho 2024</span>
        </div>
    </div>
</footer>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="index.php">Sim</a>
            </div>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>
<?php
require("layout/topo.php");
require("layout/menu.php");

?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5>Conferir Estoque</h5>
    </div>
    <div class="row col-xs-1">
        <br />
        <br />
    <div class="form-group col-xs-1">
<form action='valida_bm.php' method='post' name="formgrupo">
        <label for="inputPassword2" class="sr-only">C&oacute;digo de Barras</label>
        <input type="text" class="form-control" id="inputPassword2" placeholder="C&oacute;digo de Barras" name="buscar" autofocus="true" value="">
        </div>
        <div class="form-group col-xs-1">
            <h1 class="h3 mb-0 text-gray-800"> - </h1>
        </div>
        <div class="form-group col-xs-4">
            <input type="submit" class="btn btn-primary" value="Buscar" />
            </form>
        </div>
        <br /><br />
        <div class="form-group col-xs-1">
            <h1 class="h3 mb-0 text-gray-800"> - </h1>
        </div>
        <div class="form-group col-xs-6">
            <form action="conferenciabm.php" method="post" enctype="multipart/form-data">
                <input type="submit" class="btn btn-primary" value="Terminar" />
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#logoutModal1">Nova Leitura</a>

            </form>
        </div><br /><br />

        <?php
        $usuario = $_SESSION['UsuarioID'];
        if ($_SESSION['empresa'] == 1) {
            $sql = "SELECT * FROM leitorconferenciajn as l INNER JOIN est004 as e ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario order by l.id desc";
            $sqlresult = mysqli_query($con, $sql);
                
            $produtos = "SELECT * FROM est004 as e INNER JOIN leitorconferenciajn as l ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario  order by l.id desc  ";
            $produtosresult = mysqli_query($con, $produtos);
        }
        if ($_SESSION['empresa'] == 2) {
            $sql = "SELECT * FROM leitorconferenciasf as l INNER JOIN est004 as e ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario  order by l.id desc";
            $sqlresult = mysqli_query($con, $sql);

            $produtos = "SELECT * FROM est004 as e INNER JOIN leitorconferenciasf as l ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario  order by l.id desc  ";
            $produtosresult = mysqli_query($con, $produtos);
        }/*
        if ($_SESSION['empresa'] == 5) {
            $sql = "SELECT * FROM leitorconferenciabm as l INNER JOIN est004 as e ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario  order by l.id desc";
            $sqlresult = mysqli_query($con, $sql);

            $produtos = "SELECT * FROM est004 as e INNER JOIN leitorconferenciabm as l ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario  order by l.id desc  ";
            $produtosresult = mysqli_query($con, $produtos);
        }
        if ($_SESSION['empresa'] == 6) {
            $sql = "SELECT * FROM leitorconferenciamaimai as l INNER JOIN est004 as e ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario  order by l.id desc";
            $sqlresult = mysqli_query($con, $sql);

            $produtos = "SELECT * FROM est004 as e INNER JOIN leitorconferenciamaimai as l ON l.codproduto = e.CODPRODUTO where e.empresa = 1 and l.usuario = $usuario  order by l.id desc  ";
            $produtosresult = mysqli_query($con, $produtos);
        }*/

        #$teste = "SELECT * FROM est002";
        #$sqlteste = mysqli_query($servidor, $teste);

        ?>
        <table class="table table-striped table-bordered table-condensed table-hover">
            <tr class="">
                <th>Ordem</th>
                <th>Codigo</th>
                <th>Descrição</th>
                <th>Leu</th>
                <th>Sistema</th>
                <th>Alterar Qtde</th>
                <th>Excluir</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($sqlresult)) {
                $rowprodutos = mysqli_fetch_assoc($produtosresult);
                $cod = $row['id'];
                $link_compras = "excluircodconferencia.php?tmpString=$cod";
                $link_alterar = "alterarcodconferencia.php?tmpString=$cod";

                echo "<tr >";
                echo "<td>" . $row['id'];
                "</td>";
                echo "<td>" . $row['codproduto'];
                "</td>";
                echo "<td>" . $row['DESCPRODUTO'];
                "</td>";

                if ($rowprodutos['quantidade'] == $rowprodutos['diferenca']) {
                    echo "<td bgcolor=#ADD8E6>" . $rowprodutos['quantidade'];
                    "</td>";
                    echo "<td bgcolor=#ADD8E6>" . $rowprodutos['diferenca'];
                    "</td>";
                }
                if ($rowprodutos['quantidade'] > $rowprodutos['diferenca']) {
                    echo "<td bgcolor=#FA8072>" . $rowprodutos['quantidade'];
                    "</td>";
                    echo "<td bgcolor=#FA8072>" . $rowprodutos['diferenca'];
                    "</td>";
                }
                if ($rowprodutos['quantidade'] < $rowprodutos['diferenca']) {
                    echo "<td>" . $rowprodutos['quantidade'];
                    "</td>";
                    echo "<td>" . $rowprodutos['diferenca'];
                    "</td>";
                }
                echo "<td><a href='" . $link_alterar . "'><button type=button class=btn btn-primary>ALTERAR</button></a></li></a></td>";
                echo "<td><a href='" . $link_compras . "'><button type=button class=btn btn-primary>EXCLUIR</button></a></li></a></td>";
            }
            ?>
        </table>
    </div>
</div>
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
<div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sair do Sistema?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Deseja Excluir Dados e Inciar nova leitura?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
                <a class="btn btn-primary" href="fazerconferencia.php">Sim</a>
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
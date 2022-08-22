<?php

include_once("conexao.php");

$cont = $_POST["buscar"] ;
$inserir = mysqli_query($con,"INSERT INTO leitorjn (codproduto) VALUES ($cont)");

$result = mysqli_query($con,"SELECT * FROM leitorjn");
$resultado = mysqli_fetch_assoc($result);

$inserir= null;

if(strlen($cont) <= 6){
        include_once("leitorjn.php");
}if(strlen($cont) > 6){

        echo '<script language="javascript">';
        echo 'alert("Codigo Não Existe")';
        echo '</script>';

        include_once("leitorjn.php");
}

?>

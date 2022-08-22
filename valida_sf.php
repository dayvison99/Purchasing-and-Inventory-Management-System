<?php

include_once("conexao.php");

$cont = $_POST["buscar"] ;
$inserir = mysqli_query($con,"INSERT INTO leitorsf (codproduto) VALUES ($cont)");

$result = mysqli_query($con,"SELECT * FROM leitorsf");
$resultado = mysqli_fetch_assoc($result);

$inserir= null;

if(strlen($cont) <= 6){
        include_once("leitorsf.php");
}if(strlen($cont) > 6){

        echo '<script language="javascript">';
        echo 'alert("Codigo Não Existe")';
        echo '</script>';

        include_once("leitorsf.php");
}

?>

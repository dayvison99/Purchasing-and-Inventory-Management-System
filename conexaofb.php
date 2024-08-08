<?php

$hostname = "localhost:C:\Users\Dayvison\Documents\ESTOQUE.FDB";
$usuario = "SYSDBA"; // Usuário padrão do Firebird
$senha = "masterkey"; // Senha padrão do Firebird

$conexao = ibase_connect( $hostname, $usuario, $senha ) or die( 'Erro ao conectar: ' . ibase_errmsg() );



// $Arr_Dados = array();
//
// $Ds_Query = "SELECT * FROM est004 where codproduto <=10";
// $Ds_Retorno = ibase_query( $Ds_Query );
//
// while ( $Ds_Linha_Banco = ibase_fetch_row( $Ds_Retorno ) )
// {
//     $Arr_Dados[] = $Ds_Linha_Banco;
// }
//
// var_dump($Arr_Dados);




// Fazer uma consulta no banco:
// Instruções SQL
// $sql = "SELECT id FROM est002";
//Executa a instrução
// SQL
// $host = 'localhost:/path/to/your.gdb';
//
// $dbh = ibase_connect($host, $username, $password);
// $stmt = 'SELECT * FROM tblname';

// $query= ibase_query ($conexao, $sql);
// //gera um loop com as linhas encontradas
// while ($row = ibase_fetch_object ($query)) {
// // //imprimi as linhas na tela
//     // echo 'aa';
// }
// // //Libera a memoria usada
// ibase_free_result($query);
// // //fecha conexão com o Firebird
// ibase_close($conexao);
?>

<?php
    if(!isset($_SESSION)){
            session_start();
          }

    include_once("conexao.php");
    // $ultimoproduto = "SELECT max(CODPRODUTO) as CODPRODUTO  FROM est004";
    // $queryultimoproduto = mysqli_query($con, $ultimoproduto);
    //
    // $row = mysqli_fetch_assoc($queryultimoproduto);
    // $ultimoproduto = "'";
    // $ultimoproduto .= 'CODPRODUTO >= ';
    // $ultimoproduto .= substr($row['CODPRODUTO'],2,5);
    // $ultimoproduto .= "'";

    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetDadosProdutos';
    $arguments= array('pEmpresa'   => 5,
                      'pFiltros'   => 'CODPRODUTO >= 69998',//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetDadosProdutos' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $resultprodutosbm = $client->__soapCall($function, $arguments, $options);

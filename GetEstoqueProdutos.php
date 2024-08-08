<?php

    $cidade = strtoupper($_POST["cidade"]) ;
    $grupo = strtoupper($_POST["grupo"]);
    $subgrupo = strtoupper($_POST["subgrupo"]);
    $opcao = $_POST["opcao"];

    $querysubgrupo = "";
    if ($subgrupo > 0)
      $querysubgrupo = " and SUBGRUPO = ".$subgrupo;

    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetEstoqueProdutos';
    $arguments= array('pEmpresa'   => $cidade,
                      'pFiltros'   => 'GRUPO = '.$grupo.$querysubgrupo,//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetEstoqueProdutos' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $resultprodutosestoque = $client->__soapCall($function, $arguments, $options);
  #  include_once("atualizarbancoconferencia.php");

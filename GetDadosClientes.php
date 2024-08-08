<?php
    include_once("conexao.php");
    $cidade = strtoupper($_POST["cidade"]) ;
    $query = $con->query("SELECT max(codcliente) as codcliente FROM clientes where empresa = $cidade");
    $reg = $query->fetch_array();
    $clicontador = $reg['0'];
    if (!$clicontador){
          $clicontador = 0;
    }
  
    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetClientes';
    $arguments= array('pEmpresa'   => $cidade,
                      'pFiltros'   => "CLICONTADOR > '{$clicontador}'",//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetClientes' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $resultclientes = $client->__soapCall($function, $arguments, $options);
    include_once("atualizarbancovendas.php");

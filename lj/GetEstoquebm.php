<?php
    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetEstoqueProdutos';
    $arguments= array('pEmpresa'   => 5,
                      'pFiltros'   => '',//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'ROOT',//Nome do usuário de acesso ao sistema
                      'pSenha'     => 'SUPORTE',//Senha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetEstoqueProdutos' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $result = $client->__soapCall($function, $arguments, $options);

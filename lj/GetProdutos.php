<?php
    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetProdutos';
    $arguments= array('pEmpresa'   => 1,
                      'pFiltros'   => '',//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetProdutos' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $resultprodutos = $client->__soapCall($function, $arguments, $options);
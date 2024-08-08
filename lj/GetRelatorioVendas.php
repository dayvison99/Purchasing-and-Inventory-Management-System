<?php
    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetRelatorioVendas';
    $arguments= array('pEmpresa'   => 1,
                      'pFiltros'   => '',//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetRelatorioVendas' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $resultrelatoriovendas = $client->__soapCall($function, $arguments, $options);

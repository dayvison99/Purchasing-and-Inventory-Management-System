<?php
    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetSubGrupos';
    $arguments= array('pEmpresa'   => 1,
                      'pFiltros'   => '',//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha dnha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetSubGrupos' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $resultsubgrupo = $client->__soapCall($function, $arguments, $options);

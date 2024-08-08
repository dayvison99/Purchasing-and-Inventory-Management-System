<?php
    $client = new SoapClient('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'SetStatus';
    $arguments= array('pEmpresa'   => 1,
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                      'pStatus'    => '',
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('SetStatus' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $result = $client->__soapCall($function, $arguments, $options);

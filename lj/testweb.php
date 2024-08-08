<?php
      $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
      $function = 'GetDadosProdutos';
      $arguments= array('pEmpresa'   => 1,
                        'pFiltros'   => 'CODPRODUTO < 1000 and GRUPO = 14',//Filtro SQL (pode ficar em branco)
                        'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                        'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                        'pConexao'   => 'localhost:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                       );
      $options = array('GetDadosProdutos' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
      $resultprodutosjn = $client->__soapCall($function, $arguments, $options);

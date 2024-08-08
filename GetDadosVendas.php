<?php
    include_once("conexao.php");
    $cidade = strtoupper($_POST["cidade"]) ;
    $datainicial = strtoupper($_POST["dateinicial"]);
    $datafinal = strtoupper($_POST["datefinal"]);

    if(!isset($_SESSION)){
          session_start();
    }

    $_SESSION['cidadecliente'] = $cidade;

    $client = new SoapClient ('http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq?wsdl');
    $function = 'GetRelatorioVendas';
    $arguments= array('pEmpresa'   => $cidade,
                      'pFiltros'   => "DTVENDA BETWEEN '{$datainicial}' and '$datafinal'",//Filtro SQL (pode ficar em branco)
                      'pUsuario'   => 'DAYVISON',//Nome do usuário de acesso ao sistema
                      'pSenha'     => '199214',//Senha do usuário de acesso ao sistema
                      'pConexao'   => 'situacaoacademica.ddns.net:8090, WEBSERVICE'//IP SERVIDOR, WEBSERVICE
                     );
    $options = array('GetRelatorioVendas' => 'http://situacaoacademica.ddns.net:8090/wsdl/IServidorWSEstoq');
    $resultvendas = $client->__soapCall($function, $arguments, $options);
    include_once("atualizarbancovendas.php");

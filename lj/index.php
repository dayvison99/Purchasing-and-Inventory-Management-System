<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo de consumo WebService</title>
    </head>
    <body>
        <?php
			//Instalar a extensão SOAP no php
			//1º Localize o arquivo php.ini na pasta bin do apache: apache/bin/php.ini
			//2º Remover o ‘;‘ do início de extension=php_soap.dll
			//3º Reinicie o servidor http
            try{
                require_once 'testweb.php';

                echo '<h1>ESTOQUE DOS PRODUTOS</h1>';
                echo '<hr>';
                echo '<h3>Texto em formato Json</h3>';

                print_r($resultprodutos);

                echo '<hr>';
                echo '<h3>Texto decodificado</h3>';
                // Atribui o conteúdo do resultado para variável $arquivo
                // $arquivo = $result;

                // Decodifica o formato JSON e retorna um Objeto
                // $json = json_decode($arquivo);

                // Loop para percorrer o Objeto
                // foreach($json->LJSISTEMAS as $arquivo):
                //     // echo 'Empresa: ' . $arquivo->EMPRESA.' ';
                //     echo 'Cod.Produto: ' . $arquivo->CODPRODUTO.' ';
                //     #echo 'Estoque: ' .$arquivo->ESTOQUE .'<br>';
                // endforeach;

                require_once 'SetStatussf.php';
            } catch (Exception $e) {
                echo 'Erro ao conectar com o servidor! ';//,  $e->getMessage(), "\n";
            }
        ?>
    </body>
</html>

<?php
if(!isset($_SESSION)){
        session_start();
      }

include_once("conexao.php");

//Instalar a extensão SOAP no php
//1º Localize o arquivo php.ini na pasta bin do apache: apache/bin/php.ini
//2º Remover o ‘;‘ do início de extension=php_soap.dll
//3º Reinicie o servidor http
    try{

      #grupo
        require_once 'lj/GetGrupo.php';
       #print_r($result);
        // Atribui o conteúdo do resultado para variável $arquivo
        $grupo = $result;

      #  echo  $resultprodutosjn;
        // Decodifica o formato JSON e retorna um Objeto
        $jsongrupo = json_decode($grupo);


         $result = "DELETE FROM `est002`";
         $queryresult = mysqli_query($con, $result);
         $zerar = "ALTER TABLE `est002` AUTO_INCREMENT=1";
         $queryresult = mysqli_query($con, $zerar);



        // Loop para percorrer o Objeto
        //grupo
         foreach($jsongrupo->LJSISTEMAS as $grupo):
            $empresa = $grupo->EMPRESA;
            $grupocontador = $grupo->GRUPOCONTADOR;
            $descricao = $grupo->DESCGRUPO;
            $result = "INSERT INTO est002(`EMPRESA`,`GRUPOCONTADOR`, `DESCGRUPO`) VALUES ('$empresa','$grupocontador','$descricao')";
            $queryresult = mysqli_query($con, $result);

          endforeach;

        if ($queryresult){
            echo "Cadastros de Grupos, Subgrupos e Marcas ";
            echo "Atualizados com Sucesso ";
            echo "</br>";

        }else{
           echo "Erro na atualização dos cadastros";
            echo "</br>";

      }

      

    require_once 'lj/SetStatus.php';
    } catch (Exception $e) {
        echo 'Erro ao conectar com o servidor! ';//,  $e->getMessage(), "\n";
    }
    include_once("home.php");
?>

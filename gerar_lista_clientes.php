
 <?php
 if(!isset($_SESSION)){
         session_start();
       }

 include_once("conexao.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="../img/favicon.ico">

 <link rel="stylesheet" type="text/css" href="estilo.css"/>
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="script.js"></script>

 <title>Cantinho Compras</title>

 <!-- Custom fonts for this template-->
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link
     href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
     rel="stylesheet">

 <!-- Custom styles for this template-->
 <link href="css/sb-admin-2.min.css" rel="stylesheet">

 </head>
	<body>

		<?php
    $empresavenda = $_SESSION['cidadecliente'];

    if ($empresavenda == 1) {
      $nomeempresa = "JANUÁRIA";
    }
    if ($empresavenda == 2) {
      $nomeempresa = "SÃO FRANCISCO";
    }
    if ($empresavenda == 5) {
      $nomeempresa = "BRASILIA DE MINAS";
    }
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'LISTADECLIENTES'.$nomeempresa.'.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table width="467" >';
		$html .= '<tr>';
		$html .= '<td><b>Mobile Number *(with country code)</b></td>';
		$html .= '<td><b>Name</b></td>';
		$html .= '</tr>';

    $dados = "SELECT * FROM vendas as v INNER JOIN clientes as c ON c.codcliente = v.idcliente and c.empresa = v.empresa
    where idcliente != 1 and c.empresa = $empresavenda group by idclientes order by datavenda";
    $dadosresult = mysqli_query($con, $dados);

    if($dados === FALSE) {
          // Consulta falhou, parar aqui
        die(mysqli_error());
    }

		while($row = mysqli_fetch_assoc($dadosresult)){
      $whatsApp = 0;
      if ($row['celular']) {
        if (strlen($row['celular']) == 14) {
           $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular']);
        }else if (strlen($row['celular']) == 13) {
           $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['celular']);
        }else if (strlen($row['celular']) == 11 && substr($row['celular'],1,1) != 3) {
           if (strpos($row['celular'], '(') === false) {
             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular']);
           }else {
             $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular']);
           }
         }else if (strlen($row['celular']) == 12 && substr($row['celular'],1,1) != 3) {
            if (strpos($row['celular'], '(') === false) {
              $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular']);
            }else {
              $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular']);
            }
          }
      }else   if ($row['celular2']) {
          if (strlen($row['celular2']) == 14) {
             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular2']);
          }else if (strlen($row['celular2']) == 13) {
            $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['celular2']);
          }else if (strlen($row['celular2']) == 11 && substr($row['celular2'],1,1) != 3) {
             if (strpos($row['celular2'], '(') === false) {
               $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular2']);
             }else {
               $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular2']);
             }
           }else if (strlen($row['celular2']) == 12 && substr($row['celular2'],1,1) != 3) {
              if (strpos($row['celular2'], '(') === false) {
                $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular2']);
              }else {
                $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular2']);
              }
            }
      }else   if ($row['celular3']) {
          if (strlen($row['celular3']) == 14) {
             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular3']);
          }else if (strlen($row['celular3']) == 13) {
            $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['celular3']);
          }else if (strlen($row['celular3']) == 11 && substr($row['celular3'],1,1) != 3) {
             if (strpos($row['celular3'], '(') === false) {
               $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular3']);
             }else {
               $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular3']);
             }
           }else if (strlen($row['celular3']) == 12 && substr($row['celular3'],1,1) != 3) {
              if (strpos($row['celular3'], '(') === false) {
                $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['celular3']);
              }else {
                $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['celular3']);
              }
            }
      }else if ($row['telefone']) {
          if (strlen($row['telefone']) == 14) {
             $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['telefone']);
          }else if (strlen($row['telefone']) == 13) {
             $whatsApp = '55 '.str_replace(['(', ')','-',],['','9',''], $row['telefone']);
          }else if (strlen($row['telefone']) == 11 && substr($row['telefone'],1,1) != 3) {
             if (strpos($row['telefone'], '(') === false) {
               $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['telefone']);
             }else {
               $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['telefone']);
             }
          }else if (strlen($row['telefone']) == 12 && substr($row['telefone'],1,1) != 3) {
             if (strpos($row['telefone'], '(') === false) {
               $whatsApp = '55 '.str_replace(['(', ')','-',], '', $row['telefone']);
             }else {
               $whatsApp = '55 389'.str_replace(['(', ')','-',], '', $row['telefone']);
             }
           }
         }
    if ($whatsApp !=0) {
      $html .= '<tr>';
  		$html .= '<td>'.$whatsApp.'</td>';
      $html .= '<td>'.$row['nome'].'</td>';
      $html .= '</tr>';
    }
  }
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>

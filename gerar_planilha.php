
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
    $marca = $_SESSION['marca'];

            $estmarca = "SELECT * FROM est017 where MARCACONTADOR = '$marca'";
            $estmarcaresult = mysqli_query($con, $estmarca);

             while($marcajn = mysqli_fetch_assoc($estmarcaresult)) {
                 #echo "<td>" .$marcajn['DESCMARCA'];"</td>";
                 break;
             }

		// Definimos o nome do arquivo que será exportado
		$arquivo = 'LISTA DE COMPRAS '.$marcajn['DESCMARCA'].' JANUÁRIA.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table width="467" border="1px">';
		$html .= '<tr>';
		$html .= '<td colspan="5"><center>LISTA DE COMPRAS DA MARCA ' .$marcajn['DESCMARCA'].  ' JANUÁRIA </center></tr>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td><b>Descrição</b></td>';
		$html .= '<td><b>Ultimo Preço</b></td>';
		$html .= '<td><b>Estoque Atual</b></td>';
		$html .= '<td><b>Estoque Maximo</b></td>';
		$html .= '<td><b>Sugestão</b></td>';
		$html .= '</tr>';

		//Selecionar todos os itens da tabela


    $jn = "SELECT RIGHT(REPLACE(j.descproduto, ' ', LPAD('', 100, ' ')), 100) AS descordem,j.empresa,j.codproduto,j.descproduto,j.estaual,j.estmaximo,j.precofinal,p.ID, p.EMPRESA, p.CODPRODUTO, p.CONTAPRODUTO, p.DESCPRODUTO, p.GRUPO, p.SUBGRUPO, p.MARCA, p.ESTMINIMO, p.ESTMAXIMO FROM cvs as j INNER JOIN est004 as p ON p.CONTAPRODUTO = j.codproduto and j.empresa = p.EMPRESA where (p.MARCA = '$marca' and j.empresa = 1 and p.EMPRESA = 1) and (p.GRUPO =  78 or  p.GRUPO =  52 or  p.GRUPO =  170 or  p.GRUPO =  171 or  p.GRUPO =  172 or  p.GRUPO =  173 or  p.GRUPO =  174 or  p.GRUPO =  179 or  p.GRUPO =  181 or  p.GRUPO =  183 or  p.GRUPO =  184 or  p.GRUPO =  185 or  p.GRUPO =  186 or  p.GRUPO =  187 or  p.GRUPO =  188 or  p.GRUPO =  207 or  p.GRUPO =  10 or  p.GRUPO =  104 or  p.GRUPO =  107 or  p.GRUPO =  11 or  p.GRUPO =  111 or  p.GRUPO =  114 or  p.GRUPO =  117 or  p.GRUPO =  119 or  p.GRUPO =  120 or  p.GRUPO =  13 or  p.GRUPO =  139 or  p.GRUPO =  14 or  p.GRUPO =  141 or  p.GRUPO =  142 or  p.GRUPO =  15 or  p.GRUPO =  159 or  p.GRUPO =  16 or  p.GRUPO =  160 or  p.GRUPO =  165 or  p.GRUPO =  166 or  p.GRUPO =  167 or  p.GRUPO =  168 or  p.GRUPO =  169 or  p.GRUPO =  177 or  p.GRUPO =  178 or  p.GRUPO =  180 or  p.GRUPO =  182 or  p.GRUPO =  19 or  p.GRUPO =  21 or  p.GRUPO =  26 or  p.GRUPO =  3 or  p.GRUPO =  30 or  p.GRUPO =  31 or  p.GRUPO =  32 or  p.GRUPO =  33 or  p.GRUPO =  35 or  p.GRUPO =  4 or  p.GRUPO =  40 or  p.GRUPO =  53 or  p.GRUPO =  54 or  p.GRUPO =  56 or  p.GRUPO =  57 or  p.GRUPO =  59 or  p.GRUPO =  62 or  p.GRUPO =  63 or  p.GRUPO =  64 or  p.GRUPO =  65 or  p.GRUPO =  7 or  p.GRUPO =  71 or  p.GRUPO =  73 or  p.GRUPO =  75 or  p.GRUPO =  77 or  p.GRUPO =  8 or  p.GRUPO =  82 or  p.GRUPO =  83 or  p.GRUPO =  85 or  p.GRUPO =  88 or  p.GRUPO =  9 or  p.GRUPO =  90) order by descordem";
    $jnresult = mysqli_query($con, $jn);

    $produtos = "SELECT j.codproduto,j.descproduto,j.estaual,j.estminino,p.ID, p.EMPRESA, p.CODPRODUTO, p.CONTAPRODUTO, p.DESCPRODUTO, p.GRUPO, p.SUBGRUPO, p.MARCA, p.ESTMINIMO, p.ESTMAXIMO FROM est004 as p INNER JOIN cvs as j ON p.codproduto = j.codproduto where p.empresa = 1 ";
    $produtosresult = mysqli_query($con, $produtos);

        if($jn === FALSE) {
                // Consulta falhou, parar aqui
                die(mysqli_error());
        }


		while($rowjn = mysqli_fetch_assoc($jnresult)){

      $difjn = $rowjn['estaual']-$rowjn['estmaximo'];

      if($rowjn['estaual'] < $rowjn['estmaximo']){
			$html .= '<tr>';
			$html .= '<td>'.$rowjn['descproduto'].'</td>';
			$html .= '<td>'.$rowjn['precofinal'].'</td>';
			$html .= '<td>'.$rowjn['estaual'].'</td>';
			$html .= '<td>'.$rowjn['estmaximo'].'</td>';

      if ($rowjn['estaual'] >= $rowjn['estmaximo']){
        $html .= '<td>-</td>';
      }
      else{
        $html .= '<td>'.-$difjn.'</td>';
      }



			$html .= '</tr>';
			;
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

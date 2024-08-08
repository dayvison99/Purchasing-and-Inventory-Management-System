
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

		// Definimos o nome do arquivo que será exportado
		$arquivo = 'BALANCEAMENTO BRASILIA_JANUARIA.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table width="467" border="1px">';
		$html .= '<tr>';
		$html .= '<td colspan="5"><center>BALANCEAMENTO BRASÍLIA DE MINAS PARA JANUÁRIA </center></tr>';
		$html .= '</tr>';

		$html .= '<tr>';
    $html .= '<td><b>Codigo</b></td>';
		$html .= '<td><b>Descrição</b></td>';
		$html .= '<td><b>Minimo BM</b></td>';
		$html .= '<td><b>Excendentes JN</b></td>';
    $html .= '<td><b>Minimo JN</b></td>';
		$html .= '<td><b>Para BM</b></td>';
		$html .= '</tr>';

		//Selecionar todos os itens da tabela


    $lojas = "SELECT *,j.id as jnid,j.empresa as jnempresa,j.codproduto as jncodprduto,j.descproduto as jndescproduto,j.referencia as jnreferencia,j.estaual as jnestaual,j.estminino as jnestminino,j.estmaximo as jnestmaximo,j.difmaxest as jndifmaxest ,j.unidade as jnunidade,j.datacompra as jndatacompra,j.precofinal as jnprecofinal,j.dataalteracao as jndataalteracao, s.id as sfid,s.empresa as sfempresa,s.codproduto as sfcodprduto,s.descproduto as sfdescproduto,s.referencia as sfreferencia,s.estaual as sfestaual,s.estminino as sfestminino,s.estmaximo as sfestmaximo,s.difmaxest as sfdifmaxest ,s.unidade as sfunidade,s.datacompra as sfdatacompra,s.precofinal as sfprecofinal,s.dataalteracao as sfdataalteracao, b.id as bmid,b.empresa as bmempresa,b.codproduto as bmcodprduto,b.descproduto as bmdescproduto,b.referencia as bmreferencia,b.estaual as bmestaual,b.estminino as bmestminino,b.estmaximo as bmestmaximo,b.difmaxest as bmdifmaxest ,b.unidade as bmunidade,b.datacompra as bmdatacompra,b.precofinal as bmprecofinal,b.dataalteracao as bmdataalteracao FROM cvs as j INNER JOIN cvs2 as s ON s.codproduto = j.codproduto INNER JOIN cvs3 as b ON b.codproduto = j.codproduto INNER JOIN est004 as p ON p.CONTAPRODUTO = s.codproduto where (j.empresa = 1 and p.empresa = 1 and b.estaual > b.estminino) and (p.GRUPO !=  19 or p.GRUPO !=  49 or p.GRUPO !=  100 or p.GRUPO !=  122 or p.GRUPO !=  145 or p.GRUPO !=  157 or p.GRUPO !=  158 or p.GRUPO !=  161 or p.GRUPO !=    176 or p.GRUPO !=  208 or p.GRUPO !=  209 or p.GRUPO !=  210 or p.GRUPO !=  211 or p.GRUPO !=  212 or p.GRUPO !=  213 or p.GRUPO !=  214 or p.GRUPO !=  216 or p.GRUPO !=  1 or p.GRUPO !=  106 or p.GRUPO !=  110 or p.GRUPO !=  112 or p.GRUPO !=  12 or p.GRUPO !=  121 or p.GRUPO !=  123 or p.GRUPO !=  124 or p.GRUPO !=  125 or p.GRUPO !=  126 or p.GRUPO !=  127 or p.GRUPO !=  128 or p.GRUPO !=  130 or p.GRUPO !=  132 or p.GRUPO !=  133 or p.GRUPO !=  137 or p.GRUPO !=  138 or p.GRUPO !=  146 or p.GRUPO !=  147 or p.GRUPO !=  148 or p.GRUPO !=  149 or p.GRUPO !=  150 or p.GRUPO !=  162 or p.GRUPO !=  163 or p.GRUPO !=  164 or p.GRUPO !=  17 or p.GRUPO !=  175 or p.GRUPO !=  18 or p.GRUPO !=  199 or p.GRUPO !=  2 or p.GRUPO !=  200 or p.GRUPO !=  201 or p.GRUPO !=  202 or p.GRUPO !=  23 or p.GRUPO !=  25 or p.GRUPO !=  36 or p.GRUPO !=  37 or p.GRUPO !=  38 or p.GRUPO !=  39 or p.GRUPO !=  41 or p.GRUPO !=  45 or p.GRUPO !=  46 or p.GRUPO !=  5 or p.GRUPO !=  50 or p.GRUPO !=  55 or p.GRUPO !=  66 or p.GRUPO !=  69 or p.GRUPO !=  72 or p.GRUPO !=  74 or p.GRUPO !=  93 or p.GRUPO !=  94 or p.GRUPO !=  96 or p.GRUPO !=  97 or p.GRUPO !=  98) order by j.descproduto";
    $lojasresult = mysqli_query($con, $lojas);

    if($lojas === FALSE) {
      // Consulta falhou, parar aqui
      die(mysqli_error());
    }


    while($rowjn = mysqli_fetch_assoc($lojasresult)) {
      $rowsf = $rowjn;
      $rowbm = $rowjn;

      if ($rowbm['bmestaual'] > $rowbm['bmestminino']  and $rowjn['jnestaual'] < $rowjn['jnestminino'] and $rowsf['sfestaual'] - $rowsf['sfestminino'] <=0  ){

       $difjn = $rowjn['jnestaual']-$rowjn['jnestminino'];
       $difsf = $rowsf['sfestaual']-$rowsf['sfestminino'];
       $difbm = $rowbm['bmestaual']-$rowbm['bmestminino'];


       #Cabecario BM
       $html .= "<tr >";
       $html .= "<td>" .$rowbm['bmcodprduto'];"</td>";
       $html .= "<td>" .$rowbm['bmdescproduto'];"</td>";
       $html .= "<td>" .$rowbm['bmestminino'];"</td>";

       #se estoque de atual de BM for maior que o estoque minino

         $html .= "<td>" .$difbm;"</td>";
          $html .= "<td>" .$rowjn['jnestminino'];"</td>";



       #se SF e JN estão precisando


                         if($difbm > 0){

                               #Jn precinsando de BM
                                   if ($rowjn['jnestaual'] < $rowjn['jnestminino'] and $rowsf['sfestaual'] <= $rowsf['sfestminino'] ){
                                     #BM tem mais que jn precisa
                                       if($rowbm['bmestaual'] - $rowbm['bmestminino'] >= $rowjn['jnestminino']-$rowjn['jnestaual'] and $difsf <= 0){
                                         $html .= "<td>".($rowjn['jnestminino']-$rowjn['jnestaual']);"</td>";
                                       }
                                     #BM tem menos que jn precisa
                                       if($rowbm['bmestaual'] - $rowbm['bmestminino'] < $rowjn['jnestminino']-$rowjn['jnestaual'] and $difsf <= 0){
                                         $html .= "<td>".($rowbm['bmestaual'] - $rowbm['bmestminino']);"</td>";
                                       }

                                   }
                                   else{
                                            $html .= "<td>0</td>";
                                }

                                 #sf precinsando de BM
                                 if($rowjn['jnestaual'] > $rowjn['jnestminino'] and  $rowsf['sfestaual'] < $rowsf['sfestminino'] ){
                                         if($rowjn['jnestaual'] - $rowjn['jnestminino'] >= $rowsf['sfestminino'] - $rowsf['sfestaual']){
                                             $html .= "<td>-</td>";
                                         }}

                                //  if($rowjn['jnestaual'] <= $rowjn['jnestminino'] and  $rowsf['sfestaual'] < $rowsf['sfestminino'] ){
                                //       if($rowjn['jnestminino'] - $rowjn['jnestaual'] > $difbm){
                                //             #   $html .= "<td>-</td>";
                                //       }
                                //       if($rowsf['sfestminino'] - $rowsf['sfestaual'] <=  $difbm-($rowjn['jnestminino'] - $rowjn['jnestaual'])){
                                //           # $html .= "<td>".($rowsf['estminino'] - $rowsf['estaual']);"</td>";
                                //
                                //       }
                                //       if($rowsf['sfestminino'] - $rowsf['sfestaual'] >  $difbm-($rowjn['jnestminino'] - $rowjn['jnestaual'])){
                                //           if($difbm-($rowjn['jnestminino'] - $rowjn['jnestaual'])>0){
                                //        #$html .= "<td>".($difbm-($rowjn['estminino'] - $rowjn['estaual']));"</td>";
                                //           }
                                //       }
                                // }
                           }
                         }
                          $html .= '</tr>';
                          ;

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
		$html .= $html;
		exit; ?>
	</body>
</html>

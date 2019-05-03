<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<?php
		 $carros = array('f1' ,'motogp','indy' );
		 //var_dump($carros);
		 for ($i=0; $i < count($carros) ; $i++) { 
		 	echo $carros[$i];
		 }
		 


		?>
	</body>
</html>
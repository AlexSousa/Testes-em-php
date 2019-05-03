<?php
$valor=1;
while ( $valor<= 10) {
	
	$valor=$valor+1;
	if ($valor==5) {
		continue;
	}
	echo $valor;
	echo "<br>";
}
?>
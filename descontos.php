<?php
require_once("funcoes.php");
$valor_total=800;
$desconto=10;
//$valor_com_desconto=$c
echo "valor total = ".$valor_total." reais";
echo "<br>";
echo "desconto = " .$desconto." % ";
echo "<br>";
echo "o valor com o desconto: ".calculo($valor_total,$desconto);

?>

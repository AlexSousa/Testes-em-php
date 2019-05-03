<?php
$op=3;
$n1=2;
$n2=5;
function soma($n1,$n2)
{
	echo "<br>";
	echo "a soma: ";
	return $n1+$n2;
	
}
function subtracao($n1,$n2)
{
	echo "<br>";
	echo "a subtracao: ";
	return $n1-$n2;
	
}
function multiplicacao($n1,$n2)
{
	echo "<br>";
	echo "a multiplicacao: ";
	return $n1*$n2;
	
}
function dividir($n1,$n2)
{
	echo "<br>";
	echo "a divisao: ";
	return $n1/$n2;
	
}
switch ($op) {
	case 1:
		 echo soma($n1,$n2);
		break;
	case 2:
		echo subtracao($n1,$n2);	
		break;
	case 3:
		echo multiplicacao($n1,$n2);
		break;
	case 4:
		echo dividir($n1,$n2);
		break;		
}
	 	//echo soma($n1,$n2);
		//echo subtracao($n1,$n2);
		//echo multiplicacao($n1,$n2);
		//echo dividir($n1,$n2);
?>
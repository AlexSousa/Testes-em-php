<?php

class Felino{
	var $corre = "sim";
	function correr()
	{
		echo "ele é um felino";
	}

}
class Gato extends Felino{

}
$gato = new Gato();
$gato-> correr();
echo $gato->corre;
?>
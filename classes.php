<?php
/**
* 
*/
class Pessoa 
{
	 var $nome;
	function setNome($seunome)
	{
		$this->nome=$seunome;
	}
	function getNome(){
		return $this->nome;
	}
}

$pessoa= new Pessoa();
$pessoa->setNome("alexmay");
echo $pessoa->getNome();
?>
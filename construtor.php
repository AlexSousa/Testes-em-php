<?php
class Construtores{
	public $nome;
	function __construct($nome_recebido)
	{
		echo "projeto iniciado";
		$this->nome=$nome_recebido;
	}


	
	function hello(){
	echo "<br>"." hello ".$this->nome;
	

}
}
$build= new Construtores("Alex");
$build->hello();
?>
<?php
class Calculadora{
	private $n1;
	private $n2;
	private $total;

	function __construct(){
		$this->n1=0;
		$this->n2=0;
		$this->total=0;

	}
	function setN1($parametro_n1){
		$this->n1= $parametro_n1;
	}
	function setN2($parametro_n2){
		$this->n2=$parametro_n2;
	}
	public function somar(){
		$this->total=$this->n1+$this->n2;
	}
    function getTotal (){
    	return $this->total;
    }
}
?>
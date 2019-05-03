<?php
class Veiculo{
public $placa='123';
private $tipo;
protected $nome_veiculo="celta";
function setTipo($tipo_veiculo){
	$this->tipo = $tipo_veiculo;
}
function getTipo(){
	return $this->tipo;
}
}

class Carro extends Veiculo{
	function exibir()
	{
		echo $this->nome_veiculo;
		echo $this->placa;
		
	}

}
$carro = new Carro();
$carro->exibir();
$carro->setTipo('grande');
echo $carro->getTipo();
?>
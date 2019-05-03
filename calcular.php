<?php
require_once ('htdocs\Funcoes_calcular.php');
$n1=$_POST['n1'];
$n2=$_POST['n2'];
//$op=$_POST['operacao'];
$funcao = new Funcoes_calcular();
$funcao ->setN1($n1);
$funcao ->setN2($n2);

$funcao->getTotal();

?>
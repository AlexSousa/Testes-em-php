<?php
require_once("funcoes_valida_login.php");
$login=$_POST['login'];
$senha=$_POST['senha'];
$status_login=validar($login,$senha);
if ($status_login) {
	echo "logado com sucesso";
} else {
	echo "error 41";
}

?>

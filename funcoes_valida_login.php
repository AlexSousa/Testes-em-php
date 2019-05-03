<?php
 function validar($login,$senha)
{
	$login_bd="xande393";
	$senha_bd="123";
	if ($login==$login_bd && $senha==$senha_bd) {
		return true;
	} else {
		return false;
	}
	
}

?>
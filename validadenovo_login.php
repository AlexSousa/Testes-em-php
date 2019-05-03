<?php  
$login=$_POST['Login'];
$senha=$_POST['Senha'];
function validar($login,$senha){
	$login_bd='xande393';
	$senha_bd='12345';
	if ($login==$login_bd && $senha==$senha_bd) {
		return true;
	} else {
		return false;
	}
	
}
$validacao=validar($login,$senha);
if ($validacao) {
	echo "logado com sucesso";
} else {
	echo "error";
}

?>
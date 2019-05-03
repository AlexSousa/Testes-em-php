
<form method="post">
	<label>
		Nome Completo
		<input type="text" name="nome">
	</label>
	<label>
		CPF
		<input type="text" name="cpf">
	</label>
	<input type="submit" name="cadastar" value="cadastar">
</form>
<?php
//$_POST['cpf'];
if (isset($_POST['nome']) && empty($_POST['nome'])) {
	echo "preencha o nome correto ";
}
if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
	echo "preencha o cpf correto ";
	
}
if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
	echo "preencha o cpf somente com numeros ";
}
?>
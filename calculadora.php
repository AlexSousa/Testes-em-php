<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
<form method="post" action="calcular.php">
	<label>
		Primeiro Numero
		<input type="text" name="n1">

	</label>
	<label>
		Segundo Numero 
		<input type="text" name="n2">
		<br>
		<br>
	</label>
	<label>
		Operacao : 
	</label>
	<label>
		
		<input type="radio" name="operacao" value="soma">
		Somar
	</label>
	<label>
		
		<input type="radio" name="operacao" value="subtrair">
		Subtrair
	</label>
	<label>
		
		<input type="radio" name="operacao" value="multiplicacao">
		Multiplicacao
	</label>
	<label>
		
		<input type="radio" name="operacao" value="divisao">
		Divisao
	</label>
	<label>
	<br>
		<input type="submit" name="botao" value="Calcular">
	</label>

</form>
</body>
</html>
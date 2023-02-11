<!DOCTYPE html>
<html>
	<head>
		<title>Atividade1</title>
	</head>
	<body>
<h3>Escreva o valor em milimetros para a conversao em polegadas: </h3>
		<form method="post" action="#">
			<label>Milimetros: </label>
			<input type="number" name="valor" />

			<input type="submit" value="OK" />
		</form>
		<body>
<?php
//Declaração de variáveis
$milimetros_JM = 25.4;
$valor_JM = $_POST ['valor'];
$polegadas_JM = $valor_JM * $milimetros_JM;
//Saída em tela
echo "Esse valor em polegada e:"; 
print ($polegadas_JM);
?>
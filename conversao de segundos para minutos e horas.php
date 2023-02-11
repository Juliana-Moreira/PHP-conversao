<!DOCTYPE html>
<html>
	<head>
		<title>Atividade5</title>
	</head>
	<body>
<h3>Conversao de segundos para minutos e horas </h3>
		<form method="post" action="#">
			<label>Segundos: </label>
			<input type="number" name="segundos" />

			<input type="submit" value="OK" />
		</form>
		<body>
<?php
//Declaração de variáveis
$segundos_JM = $_POST ['segundos'];
$minutos_JM = $segundos_JM/60;
$hora_JM = $segundos_JM/3600;
//Saída em tela
echo "Em minutos:". $minutos_JM;
echo "<br>";
echo "Em horas:". $hora_JM;
echo "<br>";
echo "Em segundos:". $segundos_JM;
?>

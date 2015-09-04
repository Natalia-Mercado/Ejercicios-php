<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<!-- A02: Calcular cuanta distancia en kilómetros recorre la velocidad de la luz en el espacio en 800 días. -->
	<!-- Velocidad de la luz 299792458 m/s; -->
	<!-- Kilometros por hora 8.765.812 * 24 -->
	<!-- Kilometros por dia 210379488 -->
	<!-- Total 210379488 * 800 -->
        <form action="Ejercicio2.php" method="POST">
		 Cantidad de Dias:<br>
  		<input type="text" name="dias" id="dias" value="0">
  		<input type="submit" value="Enviar">
	</form>
	<?php if(!empty($GET['velocidad'])){
		echo  "La cantidad del recorrido es:".$GET['velocidad'];		
	} ?>

</body>
</html>
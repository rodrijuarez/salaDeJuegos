<?php
	session_start();
	if(isset($_SESSION["usuario"])){
		echo $_SESSION["usuario"];
	}
	else{
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sala De Juegos</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->

        <!--Final de Lógica-Programación -->


	</head>
	<body>
		<div class="CajaInicio animated bounceInRight">
			<h1>Menú de Juegos</h1>
			<form id="FormIngreso">

					<img src="tps.png" style="width: 500px;float: right;">


				<a  class="MiBotonUTNMenuInicio" onclick="location.href='AdivinaElNumero2.html'" >Adivina el número secreto</a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='PiedraPapelTijera2.html'" >Piedra, papel o tijera </a>
				<a  class="MiBotonUTNMenuInicio" onclick="location.href='ReflejosDaltonicos1.html'" >Reflejos daltonicos</a>
				


			</form>

		</div>
		<a href="logout.php">Salir</a>

		<center>

		</center>

	</body>
</html>

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
			<h3>Ingreso a la sala</h3>
			
		<form method="POST" action="destino.php">
					<input type="text" placeholder="Ingrese usuario" name="usuario"
					value="<?php if (isset($_COOKIE['ultimoUsuario'])){
						echo $_COOKIE['ultimoUsuario'];
					}?>">
 
					<input type="submit"  class="MiBotonUTNMenuInicio" value= "ingresar" > 
		</form>
		</div>
		<center>

		</center>

	</body>
</html>

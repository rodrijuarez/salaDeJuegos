<?php
	session_start();
	header('Location: menu.php');
	$_SESSION["usuario"] = $_POST["usuario"];
	setcookie("ultimoUsuario", $_SESSION["usuario"]);
?>
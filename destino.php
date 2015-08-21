<?php
	session_start();
	echo "El nombre de usuario es : ".$_POST["usuario"];
	header('Location: menu.php');
	$_SESSION["usuario"] = $_POST["usuario"];
?>
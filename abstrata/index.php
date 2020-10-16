<?php
require_once("ChequeComum.php");
require_once("ChequeEspecial.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php

		$chequeComum = new ChequeComum(2200, "Careca");

		echo $chequeComum->calcularJuro();
		echo "<hr>";
		$chequeEspecial = new ChequeEspecial(2100.10, "Em Branco");
		echo $chequeEspecial->calcularJuro();


		 ?>

	</body>
</html>

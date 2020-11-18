<?php 
require_once("Funcionario.php");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php 
		$funcionario = new Funcionario();
		$funcionario->nome = "André Cardoso";
		$funcionario->salario = 1000;
		echo $funcionario->verSalario();
		

		 ?>

	</body>
</html>

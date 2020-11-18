<?php 
require_once("Funcionario.php");
require_once("Bonus.php");

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
		$bonus = new Bonus();
		$bonus->salario = 600;
		echo '<br>';
		echo $bonus->verBonus();





		 ?>

	</body>
</html>

<?php
require_once("Disciplina.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		$estado = new Disciplina("André Cardoso", 1, 5);
		echo $estado->situacao();
		echo Disciplina::$media ."<br>";
		echo Disciplina::situacaoAluno();


		 ?>

	</body>
</html>

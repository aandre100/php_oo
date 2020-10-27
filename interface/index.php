<?php
require_once("CursoPosGraduacao.php");


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
    <?php
    $disciplina = new CursoPosGraduacao();
    $disciplina->disciplina("Curso de Botânica");
    echo '<br>';
    $disciplina->professor("André Cardoso");

     ?>

	</body>
</html>

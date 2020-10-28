<?php
require_once("CursoPosGraduacao.php");
require_once("CursoGraduacao.php");


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
    <?php
    $cursoPosGraduacao = new CursoPosGraduacao();
    echo $cursoPosGraduacao->disciplina("Desenvolvimento WEB");
    echo $cursoPosGraduacao->professor("André Cardoso");
	echo '<hr>';
	$cursoGraduacao = new CursoGraduacao();
	echo $cursoGraduacao->disciplina("Sistemas Linux");
	echo $cursoGraduacao->professor("Thomas Whatson");


     ?>

	</body>
</html>

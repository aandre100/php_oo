<?php
require_once('./Usuario.php');

 ?>
<!DOCTYPE html>
<html lang="pt-pt">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			$cadastrar = new Usuario();
			$resultados = $cadastrar->listar();

			foreach($resultados as $resultado){	
				echo $resultado['id'] . "<br>";
				echo utf8_encode($resultado['nome']) . "<br>";
				echo $resultado['email'] . "<br>";
			}


		 ?>

	</body>
</html>

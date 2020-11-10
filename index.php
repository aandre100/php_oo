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
			$resultados_users = $cadastrar->listar();

			foreach($resultados_users as $resultado_user){
				echo $resultado_user['id'] . "<br>";
				echo utf8_encode($resultado_user['nome']) . "<br>";
				echo $resultado_user['email'] . "<br>";
				echo "<hr>";
			}


		 ?>

	</body>
</html>

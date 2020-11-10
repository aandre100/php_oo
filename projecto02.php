<?php 
date_default_timezone_set('Europe/London');
 ?>
<!DOCTYPE html>
<html lang="pt-pt" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php 
		if(phpversion() >= 7.0):
			echo phpversion() . " - Olá mundo";
		else:
			echo phpversion() . " - Necessário actualizar o PHP";
		endif;
		echo "<hr>";
		echo ini_get("date.timezone") . "<br>";
		echo date('d/m/Y H:i:s');
		 ?>

	</body>
</html>

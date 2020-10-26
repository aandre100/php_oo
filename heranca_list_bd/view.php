<?php
require_once("Conn.php");
require_once("Contact.php");
$idUrl = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//verificar se existe // ID
if(!isset($idUrl) || empty($idUrl)){
	echo "Tem de Introduzir um id!!!!";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Detalhes da Mensagem de Contacto</h1>
		<a href="index.php">Listar</a><br><br>
		<?php
		$viewMsgContact = new Contact();
		// var_dump($id);
		// exit();
		//enviar id para classe contacto
		$viewMsgContact->id = (int)$idUrl;
		$resultViewContact = $viewMsgContact->view();

			extract($resultViewContact);
			echo "ID: " . $id . '<br>';
			echo "Nome: " . $name . '<br>';
			echo "Email: " . $email . '<br>';
			echo "Titulo Mensagem: " . $msg_title . '<br>';
			echo "Conteúdo: " . utf8_encode($msg_content) . '<br>';


		 ?>
	</body>
</html>

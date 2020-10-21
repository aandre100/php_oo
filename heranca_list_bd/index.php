<?php
require_once("Conn.php");
require_once("Contact.php");
 ?>



<!DOCTYPE html>
<html lang="pt-pt">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Listar Mensagem de Contacto</h1>
		<a href="create.php">Cadastrar</a><br><br>
		<?php
			$listMsgContact  = new Contact();
			$result_list_contacts = $listMsgContact->list();

			foreach($result_list_contacts as $row_list_contact){
				extract($row_list_contact);
				echo "ID: " . $id . '<br>';
				echo "Nome: " . $name . '<br>';
				echo "Email: " . $email . '<br>';
				echo "Titulo Mensagem: " . $msg_title . '<br>';
				echo "Conteúdo: " . utf8_encode($msg_content) . '<br>';
				echo "<hr>";
			}

			$result_list_contacts = $listMsgContact->view();
			var_dump($result_list_contacts);
			exit();
		 ?>
</body>
</html>

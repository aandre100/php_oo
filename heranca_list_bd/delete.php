<?php
session_start();
require_once("Conn.php");
require_once("Contact.php");
$idUrl = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//verificar se existe // ID
if(!isset($idUrl) || empty($idUrl)){
	echo "Tem de Introduzir um id!!!!";
}
$deleteMsgContacts = new Contact();

$deleteMsgContacts->id = (int)$idUrl;

$value = $deleteMsgContacts->delete();
if($value){
	$_SESSION['msg'] = "Mensagem de contacto apagada com sucesso!";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "Erro: Mensagem de contacto não apagada com sucesso!";
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

	</body>
</html>

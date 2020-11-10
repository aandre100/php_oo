<?php 
session_start();
require_once("Conn.php");
require_once("Contact.php");
$idUrl = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//verificar se existe // ID
if(!isset($idUrl) || empty($idUrl)){
	$_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Tem de Introduzir um id!!!!</div>";
	header("Location: index.php");
	exit();

}
$deleteMsgContacts = new Contact();

$deleteMsgContacts->id = (int)$idUrl;

$value = $deleteMsgContacts->delete();
if($value){
	$_SESSION['msg'] = "<div class='alert alert-success'>Mensagem apagada com êxito!!!</div>";

	header("Location: index.php");
	exit();
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Mensagem de contacto não apagada com sucesso!</div>";
	header("Location: index.php");
	exit();
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

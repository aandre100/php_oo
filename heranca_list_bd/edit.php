<?php 
session_start();
ob_start(); //quando gerar erro e nãõ redireccionar usar ob_start
require_once("Conn.php");
require_once("Contact.php");
$idUrl = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//verificar se existe // ID
if(!isset($idUrl) || empty($idUrl)){
	echo "Tem de Introduzir um id!!!!";
}

$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($formData['sendEditMsg'])){
   $editMsgContacts = new Contact();
   $editMsgContacts->formData = $formData;
   // var_dump($formData);
   // exit();
   $value = $editMsgContacts->update();

   if($value){
   	$_SESSION['msg'] = "<div class='alert alert-success'>Mensagem editada com êxito!!!</div>";

   	header("Location: index.php");
   	exit();
   }else{
   	$_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Mensagem de contacto não editada com sucesso!</div>";
   	header("Location: index.php");
   	exit();
   }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	<body>
		<h1>Editar Mensagem de Contacto</h1>
		<a href="index.php">Listar</a><br><br>
		<?php 
		$viewMsgContact = new Contact();
		// var_dump($id);
		// exit();
		//enviar id para classe contacto
		$viewMsgContact->id = (int)$idUrl;
		$resultViewContact = $viewMsgContact->view();
			extract($resultViewContact);

			?>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<h1>Cadastrar Mensagem de Contacto</h1>
					<form name="CreateMsg" action "" method="post">

						<input type="hidden" value="<?php  echo $id; ?>" name="id">
						<div class="form-group">
							<label>Nome: </label>
							<input class="form-control form-control-sm" type="text" value="<?php  echo $name; ?>" name="name" placeholder="Nome completo" required>
						</div>
						<div class="form-group">
							<label>Email: </label>
							<input class="form-control form-control-sm" type="email" value="<?php  echo $email; ?>"  name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<label>Titulo da Mensagem: </label>
							<input  class="form-control form-control-sm" type="text" value="<?php  echo $msg_title; ?>" name="msg_title" placeholder="Titulo da Mensagem" required><br><br>
						</div>
						<div class="form-group">
							<label>Conteúdo da Mensagem: </label>
							<textarea  class="form-control form-control-sm" name="msg_content" placeholder="Conteúdo da Mensagem"  rows="4" cols="50" required><?php  echo utf8_encode($msg_content); ?></textarea><br><br>
						</div>
						<input class="btn btn-info" type="submit" value="Salvar" name="sendEditMsg">
					</form>



	</body>
</html>

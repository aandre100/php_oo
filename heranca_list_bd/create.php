<?php
session_start();
ob_start(); //quando gerar erro e nãõ redireccionar usar ob_start
require_once("Contact.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>


	<?php
	$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	if(!empty($formData['sendCreatMsg'])){
	   $creatMsgContacts = new Contact();
	   $creatMsgContacts->formData = $formData;
	   $value = $creatMsgContacts->create();

	   if($value){
 	  	$_SESSION['msg'] = "<div class='alert alert-success'>Mensagem criada com êxito!!!</div>";

 	  	header("Location: index.php");
 	  	exit();
 	  }else{
 	  	$_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Mensagem de contacto não criada com sucesso!</div>";
 	  	header("Location: index.php");
 	  	exit();
 	  }
   }



	?>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<h1>Cadastrar Mensagem de Contacto</h1>
			<form name="CreateMsg" action "" method="post">
				<div class="form-group">
					<label>Nome: </label>
					<input class="form-control form-control-sm" type="text" name="name" placeholder="Nome completo" required>
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input class="form-control form-control-sm" type="email" name="email" placeholder="Email" required>
				</div>
				<div class="form-group">
					<label>Titulo da Mensagem: </label>
					<input  class="form-control form-control-sm" type="text" name="msg_title" placeholder="Titulo da Mensagem" required><br><br>
				</div>
				<div class="form-group">
					<label>Conteúdo da Mensagem: </label>
					<textarea  class="form-control form-control-sm" name="msg_content" placeholder="Conteúdo da Mensagem"  rows="4" cols="50" required>Conteúdo da Mensagem</textarea><br><br>
				</div>
				<input class="btn btn-info" type="submit" value="Submeter" name="sendCreatMsg">
			</form>
			<a href="index.php">Listar</a><br><br>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_start();
require_once("Conn.php");
require_once("Contact.php");
 ?>



<!DOCTYPE html>
<html lang="pt-pt">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	<body>
		<div class="container">
		<h1>Listar Mensagem de Contacto</h1>
		<?php if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){ ?>
		  <?php echo $_SESSION['msg']; unset($_SESSION['msg'])?>
	<?php } ?>
		<a href="create.php">Cadastrar</a><br><br>
		<?php
			$listMsgContact  = new Contact();
			$result_list_contacts = $listMsgContact->list();
			?>
			<div class="card text-white bg-primary mb-3">
				<div class="card-body">
			<?php

			foreach($result_list_contacts as $row_list_contact){
				extract($row_list_contact);

				echo "ID: " . $id . '<br>';
				echo "Nome: " . $name . '<br>';
				echo "Email: " . $email . '<br>';
				echo "Titulo Mensagem: " . $msg_title . '<br>';
				echo "Conteúdo: " . $msg_content . '<br>';
				echo "<a class='btn btn-info' href='view.php?id=".$id."'>Ver</a>&nbsp;";
				echo "<a class='btn btn-success' href='edit.php?id=".$id."'>Editar</a>&nbsp;";
				echo "<a class='btn btn-danger' href='delete.php?id=".$id."'>Apagar</a>";
				echo "<hr>";
			} ?>
			</div>
		  </div>
		  </div>

		  <script
		    src="https://code.jquery.com/jquery-3.5.1.js"
		    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
		    crossorigin="anonymous"></script>
	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript">

			$(document).ready(function () {

			window.setTimeout(function() {
			    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
			        $(this).remove();
			    });
			}, 5000);

			});
		</script>
</body>
</html>

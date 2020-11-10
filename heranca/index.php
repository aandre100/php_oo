<?php 
require_once("ClientePessoaFisica.php");
require_once("ClientePessoaJuridica.php");

 ?>
<!DOCTYPE html>
<html lang="pt-pt" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php 
			$cliente = new ClientePessoaFisica();
			$cliente->logradouro = "Rua Nova das Perlinhas";
			$cliente->bairro = "Bairro 12";
			$cliente->nome = "André Cardoso";
			$cliente->cpf = 122;
			echo $cliente->verEndereco();
			echo  "<br>";
			echo $cliente->verInformacaoUsuario();
			echo "<hr>";
			$clientePJ = new ClientePessoaJuridica();
			$clientePJ->logradouro = "Rua Costa Cabral";
			$clientePJ->bairro = "Porto";
			$clientePJ->nomeFantasia = "SPZN";
			$clientePJ->cnpj = 501072195;
			echo $clientePJ->verInformacaoEnpresa();




		 ?>

	</body>
</html>

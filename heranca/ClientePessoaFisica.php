<?php 
require_once("Cliente.php");

/**
 *
 */
class ClientePessoaFisica extends Cliente
{
	public string $nome;
	public int $cpf;

	public function verInformacaoUsuario():string{
		$dados = "<br>Endereço da pessoa fisica:<br>";
		$dados .= "Endereço: {$this->logradouro}<br>";
		$dados .= "Bairro: {$this->bairro}<br>";
		$dados .= "Nome: {$this->nome}<br>";
		$dados .= "CPF: {$this->cpf}";
		return "<p>$dados</p>";
	}
}

 ?>

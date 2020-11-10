<?php 
require_once("Cliente.php");

/**
 *
 */
class ClientePessoaJuridica extends Cliente
{
	public string $nomeFantasia;
	public int $cnpj;

	public function verInformacaoEnpresa():string{
		$dados = "<br>Endereço da pessoa Juridica:<br>";
		$dados .= "Endereço: {$this->logradouro}<br>";
		$dados .= "Bairro: {$this->bairro}<br>";
		$dados .= "Nome Fantasia: {$this->nomeFantasia}<br>";
		$dados .= "CNPJ: {$this->cnpj}";
		return "<p>$dados</p>";
	}
}

 ?>

<?php
require_once("Cliente.php");

class ClientePessoaFisica extends Cliente
{
public $Cpf;
public $Nome;

    

/**
 * Set the value of Cpf
 *
 * @return  self
 */ 
public function setCpf($Cpf)
{
$this->Cpf = $Cpf;

return $this;
}

/**
 * Set the value of Nome
 *
 * @return  self
 */ 
public function setNome($Nome)
{
$this->Nome = $Nome;

return $this;
}

public function verEndereco()
{
    return "<p>Endereço da Pessoa Fisica.<br> Endereço: {$this->Endereco} <br> Bairro: 
    {$this->Bairro}<br>Nome: {$this->Nome}<br>CPF: {$this->Cpf}</p>";
}
}

<?php
require_once("Cliente.php");

class ClientePessoaJuridica extends Cliente
{
    public $Cnpj;
    public $NomeFantasia;

    

    /**
     * Set the value of NomeFantasia
     *
     * @return  self
     */ 
    public function setNomeFantasia($NomeFantasia)
    {
        $this->NomeFantasia = $NomeFantasia;

        return $this;
    }

    /**
     * Set the value of Cnpj
     *
     * @return  self
     */ 
    public function setCnpj($Cnpj)
    {
        $this->Cnpj = $Cnpj;

        return $this;
    }
    public function verEndereco()
    {
        return "<p>Endereço da Pessoa Juridica.<br> Endereço: {$this->Endereco} <br> Bairro: 
        {$this->Bairro}<br>Nome: {$this->NomeFantasia}<br>CNPJ: {$this->Cnpj}</p>";
    }
}

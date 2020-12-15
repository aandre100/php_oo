<?php

class Cliente
{
    public $Endereco;
    public $Bairro;


    /**
     * Get the value of Endereco
     */ 
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * Set the value of Endereco
     *
     * @return  self
     */ 
    public function setEndereco($Endereco)
    {
        $this->Endereco = $Endereco;

        return $this;
    }

    /**
     * Get the value of Bairro
     */ 
    public function getBairro()
    {
        return $this->Bairro;
    }

    /**
     * Set the value of Bairro
     *
     * @return  self
     */ 
    public function setBairro($Bairro)
    {
        $this->Bairro = $Bairro;

        return $this;
    }

    public function verEndereco(){
        return "<p>Endereço: {$this->Endereco} <br> Bairro: {$this->Bairro}</p>";
    }
}

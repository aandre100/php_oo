<?php

abstract class Cheque
{
    public float $Valor;
    public string $Tipo;

    public function __construct($valor,$tipo)
    {
        $this->Valor = $valor;
        $this->Tipo = $tipo;
    }
    public function verValor() {
        return "O valor do cheque {$this->Tipo} é {$this->real($this->Valor)}€";
    }
    public function real($Valor){
        return number_format($Valor, '2',',','.');
    }

    
}

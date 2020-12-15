<?php
require_once("Cheque.php");


class ChequeComum extends Cheque
{
   public function calcularJuros()
   {
       $this->Valor = $this->Valor * 1.25;
       $cena = parent::real($this->Valor);
       return "Valor do cheque {$this->Tipo}: {$cena}€";
   } 
}


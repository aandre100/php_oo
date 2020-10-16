<?php
require_once("Cheque.php");

/**
 *
 */
class ChequeComum extends Cheque
{

  public function calcularJuro():string {
    	return "Valor do cheque {$this->tipo} é {$this->valor}€<br>";
  }
}

 ?>

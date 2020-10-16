<?php
require_once("Cheque.php");

/**
 *
 */
class ChequeComum extends Cheque
{

  public function calcularJuro():string {
    $valorComJuro = $this->valor + (0.40 * $this->valor);
    $valorConvertido = parent::converterReal($valorComJuro);
    return "Valor do cheque {$this->tipo} é {$valorConvertido}€<br>";
  }
}

 ?>

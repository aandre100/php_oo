<?php 

require_once("Cheque.php");
/**
 *
 */
class ChequeEspecial extends Cheque
{
  public function calcularJuro():string {
    $valorComJuro = $this->valor + (0.40 * $this->valor);
    $converterReal = $this->converterReal($valorComJuro);
    	return "Valor do cheque {$this->tipo} é {$converterReal}€<br>";
  }
// Método final não pode ser reescrito
final public function converterReal($valor){
    return number_format($valor,'2',",", '.');
  }

}

 ?>

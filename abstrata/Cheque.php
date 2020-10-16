<?php

/**
 *
 */
abstract class Cheque
{
	public float $valor;
	public string $tipo;

	public function __construct($valor, $tipo){
		$this->valor = $valor;
		$this->tipo = $tipo;
	}
	public function verValor():string{
		return "Valor do cheque {$this->tipo} é {$this->valor}€<br>";
	}

}



 ?>

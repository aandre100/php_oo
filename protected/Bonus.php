<?php
/**
 * Esta classe serve para mostrar o bonus
 */

class Bonus extends Funcionario
{
	/**
	 * Este método vai ao método protegido bonusCalculado e devolve o bonus convertido
	 */
 public function verBonus(): string {
	 return $this->bonusCalculado();
 }
}




 ?>

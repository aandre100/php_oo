<?php 
/**
 * Bonus é uma classe filha da classe funcionário
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

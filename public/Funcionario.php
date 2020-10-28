<?php
/**
 *
 */
class Funcionario
{
	public string $nome;
	public float $salario;


	public function verSalario(): string{
		return "O Funcionário {$this->nome} aufere o salário de {$this->converterSalario()}€";
	}
	public function converterSalario(): string{
		return number_format($this->salario, '2', ',', '.');
	}
}



 ?>

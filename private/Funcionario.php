<?php
/**
 *
 */
class Funcionario
{
	public string $nome;
	public float $salario;
	private string $salarioConvertido;

	public function verSalario(): string {
		return "O Funcionário {$this->nome} aufere o salário de {$this->converterSalario()}€";
	}
	private function converterSalario(){
		$this->salarioConvertido = number_format($this->salario, '2', ',', '.');
		return $this->salarioConvertido;
	}
}


 ?>

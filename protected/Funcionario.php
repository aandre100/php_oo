<?php
/**
 * A classe Funcionário calcula o salário do colaborador
 * @author André Cardoso
 */
class Funcionario
{
	/** @var string $nome recebe o nome do colaborador */
	public string $nome;
	/** @var float $salario recebe o salario do colaborador */
	public float $salario;
	/** @var string $salarioConvertido recebe o salario convertido do colaborador */
	private string $salarioConvertido;
	/** @var string $bonus recebe o bonus do colaborador */
	protected float $bonus = 2500;
	/** 
	 * Ver salário mostra o salário do funcionário já comnvertido com number format
	 */
	public function verSalario(): string {
		return "O Funcionário {$this->nome} aufere o salário de {$this->converterSalario($this->salario)}€";
	}
	private function converterSalario($valor): string{
		$this->salarioConvertido = number_format($valor, '2', ',', '.');
		return $this->salarioConvertido;
	}
	protected function bonusCalculado(): string{
		$retorno = $this->converterSalario($this->bonus);
		return $retorno;
	}
}


 ?>

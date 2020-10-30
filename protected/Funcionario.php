<?php
/**
 * A classe Funcionário calcula o salário do colaborador
 * @author André Cardoso
 */
class Funcionario
{
	/** $nome recebe o nome do colaborador */
	public string $nome;
	/**  $salario recebe o salario do colaborador */
	public float $salario;
	/** $salarioConvertido recebe o salario convertido do colaborador */
	private string $salarioConvertido;
	/** $bonus recebe o bonus do colaborador */
	protected float $bonus = 2500;
	/** 
	 *  Retorna a frase e salário do funcionário já comnvertido com number format
	 * 
	 * @return string retorna a frase com o salário
	 */
	public function verSalario(): string {
		return "O Funcionário {$this->nome} aufere o salário de {$this->converterSalario($this->salario)} <br>";
	}
	/**
	 * Recebe o salário e retorna convertido
	 * Método privado, somente pode ser chamado na classe
	 * @param float $valor deve ser enviado parametro numerico
	 * @return string Retorna o valor convertido
	 */
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

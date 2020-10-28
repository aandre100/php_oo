<?php

/**
 *
 */
class Disciplina
{
	public string $aluno;
	public float $notaTrabalho;
	public float $notaProva;
	public static $media;

	function __construct(string $aluno, float $notaTrabalho, float $notaProva)
	{
		$this->aluno = $aluno;
		$this->notaTrabalho = $notaTrabalho;
		$this->notaProva = $notaProva;
		self::$media = $this->notaProva + $this->notaTrabalho;
	}
	public function situacao(): string
	{
		if(self::$media >=7){
			return "Aluno(a) {$this->aluno} está <b> Aprovado</b> com a média ". self::$media ."<hr>";
		} else {
			return "Aluno(a) {$this->aluno} está <b> Reprovado</b> com a média ". self::$media ."<hr>";
		}
	}
    static function situacaoAluno(): string
	{
		if(self::$media >=7){
			return "Média ". self::$media ."<hr>";
		} else {
			return "Média ". self::$media ."<hr>";
		}

    }
}




 ?>

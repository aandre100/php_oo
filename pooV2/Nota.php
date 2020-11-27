<?php

/**
 * 
 */
class Nota
{
    public $aluno;
    public $prova;
    public $trabalho;
    public $disciplina;

    public function setNota($aluno, $disciplina, $prova, $trabalho){
        $this->aluno = $aluno;
        $this->disciplina = $disciplina;
        $this->prova = $prova;
        $this->trabalho = $trabalho;
    }
    public function getNota(){
        return "Nome do Aluno ".$this->aluno ." teve na disciplina de " . $this->disciplina ." a nota de ".($this->prova + $this->trabalho);
    }
}

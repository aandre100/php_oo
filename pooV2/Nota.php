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

   

    /**
     * Get the value of prova
     */ 
    public function getProva()
    {
        return $this->prova;
    }

    /**
     * Set the value of prova
     *
     * @return  self
     */ 
    public function setProva($prova)
    {
        $this->prova = $prova;

        return $this;
    }

    /**
     * Get the value of trabalho
     */ 
    public function getTrabalho()
    {
        return $this->trabalho;
    }

    /**
     * Set the value of trabalho
     *
     * @return  self
     */ 
    public function setTrabalho($trabalho)
    {
        $this->trabalho = $trabalho;

        return $this;
    }

    /**
     * Get the value of disciplina
     */ 
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set the value of disciplina
     *
     * @return  self
     */ 
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }
}

 

<?php

/**
 * gets and sets usuario
 */


class Usuario
{
    public $nome;
    public $email;
    public $prova;
    public $trabalho;

    public function setUsuario($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }
    public function getUsuario(){
        return "Nome do aluno: {$this->nome} . Email: {$this->email}";
    }
    public function setNota($prova, $trabalho){
        $this->prova = $prova;
        $this->trabalho = $trabalho;
    }
    public function getNota(){
        $cena = $this->prova + $this->trabalho;
        return "Nota: ". $cena;
    }
    
}


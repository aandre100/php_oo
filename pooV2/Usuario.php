<?php

/**
 * 
 */


class Usuario
{
    public $nome;
    public $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
        return "O usuario {$this->nome} tem o email {$this->email}";
    }
    
}


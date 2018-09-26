<?php

class Pessoa{

    public $nome;
    public $telefone;
    public $email;
    private $rendimento;

    public function exibeDados(){
        echo "Nome: $this->nome, Telefone: $this->telefone, Email: $this->email";
    }

    public function verRendimento(){
        return $this->rendimento;
    }

    public function addRendimento($add){
        $this->rendimento += $add;
    }
}
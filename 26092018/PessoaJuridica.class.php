<?php
require 'Pessoa.class.php';
class PessoaJuridica extends Pessoa{

    public $cnpj;
    public $razaoSocial;

    public function exibeDados()
    {
        parent::exibeDados(); // TODO: Change the autogenerated stub
        echo " CNPJ: $this->cnpj, Razao Social: $this->razaoSocial";
    }
}

$fulano = new PessoaJuridica();
$fulano->nome = 'Fulano';
$fulano->email = 'fulano@fulano.com';
$fulano->telefone = 9999999999;
$fulano->cnpj = 99999999999999;
$fulano->razaoSocial = "Joao pe de feijao";


$fulano->exibeDados();
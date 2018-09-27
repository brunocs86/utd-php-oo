<?php
require 'Documentos.class.php';
class Cpf extends Documentos {

}

$cpf = new Cpf();

$cpf->setNumero("123.123.123-23");
$cpf->setDataEmissao("31/02/2000");

echo "CPF: ".$cpf->getNumero()."<br>";
echo "Data de Emissao: ".$cpf->getDataEmissao();
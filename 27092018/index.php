<?php
require 'Cpf.class.php';
require 'Rg.class.php';
require 'Passaporte.class.php';


$cpf = new Cpf();
$rg = new Rg();
$passaporte = new Passaporte();

$cpf->setNumero("123.123.123-23");
$cpf->setDataEmissao("31/02/2000");
$rg->setNumero("12312312386");
$rg->setDataEmissao("31/02/2000");
$passaporte->setNumero('br010986');
$passaporte->setDataEmissao("31/02/2000");

var_dump($cpf);
echo "<br><br>";
var_dump($rg);
echo "<br><br>";
var_dump($passaporte);
<?php
require_once("Cpf.class.php");
require_once("Rg.class.php");
require_once("Passaporte.class.php");

$cpf = new Cpf();
$rg = new Rg();
$passaporte = new Passaporte();

$cpf->setNumero("123.123.123-23");
$cpf->setDataEmissao("31/02/2000");

$rg->setNumero("222.222.222-23");
$rg->setDataEmissao("31/02/2000");

$passaporte->setNumero("333.333.333-23");
$passaporte->setDataEmissao("31/02/2000");

echo "CPF: ".$cpf->getNumero()."<br>";
echo "Data de Emissao: ".$cpf->getDataEmissao();
echo "<br><br>";
echo "Rg: ".$rg->getNumero()."<br>";
echo "Data de Emissao: ".$rg->getDataEmissao();
echo "<br><br>";
echo "Passaporte: ".$passaporte->getNumero()."<br>";
echo "Data de Emissao: ".$passaporte->getDataEmissao();
echo "<br><br>";
var_dump($cpf);
echo "<br><br>";
var_dump($rg);
echo "<br><br>";
var_dump($passaporte);
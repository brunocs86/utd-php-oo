<?php
require_once("Documentos.class.php");



class Passaporte extends Documentos {

    private $CI;

    /**
     * @return mixed
     */
    public function getCI()
    {
        return $this->CI;
    }
    /**
     * @param mixed $CI
     */
    public function setCI($CI)
    {
        $this->CI = $CI;
    }
}

$passaporte = new Passaporte();

$passaporte->setNumero("rr152484");
$passaporte->setDataEmissao("31/02/2000");
$passaporte->setOrgao("PF");
$passaporte->setNacionalidade("Brasileiro");
$passaporte->setNaturalidade("Cearense");
$passaporte->setCI("br089106");

var_dump($passaporte);
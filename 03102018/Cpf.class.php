<?php
require_once("Documentos.class.php");

class Cpf extends Documentos {
    private $estadoEmissao;

    /**
     * @return mixed
     */
    public function getEstadoEmissao()
    {
        return $this->estadoEmissao;
    }

    /**
     * @param mixed $estadoEmissao
     */
    public function setEstadoEmissao($estadoEmissao)
    {
        $this->estadoEmissao = $estadoEmissao;
    }
}

$cpf = new Cpf();

$cpf->setNumero("123.123.123-23");
$cpf->setDataEmissao("31/02/2000");
$cpf->setOrgao("Receita Federal");
$cpf->setNacionalidade("Brasileiro");
$cpf->setNaturalidade("Cearense");
$cpf->setEstadoEmissao("Ceará");

var_dump($cpf);
echo "<br>";
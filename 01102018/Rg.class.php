<?php
require_once("Documentos.class.php");
class Rg extends Documentos {
    private $pai;
    private $mae;
    private $registro;

    /**
     * @return mixed
     */
    public function getPai()
    {
        return $this->pai;
    }
    /**
     * @param mixed $pai
     */
    public function setPai($pai)
    {
        $this->pai = $pai;
    }
    /**
     * @return mixed
     */
    public function getMae()
    {
        return $this->mae;
    }
    /**
     * @param mixed $mae
     */
    public function setMae($mae)
    {
        $this->mae = $mae;
    }
    /**
     * @return mixed
     */
    public function getRegistro()
    {
        return $this->registro;
    }
    /**
     * @param mixed $registro
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;
    }

}

$rg = new Rg();

$rg->setNumero("8511584212");
$rg->setDataEmissao("31/02/2000");
$rg->setOrgao("SSPDS");
$rg->setNacionalidade("Brasileiro");
$rg->setNaturalidade("Cearence");
$rg->setPai("Jose Silva");
$rg->setMae("Maria Silva");
$rg->setRegistro("cartorio joao de deus");

var_dump($rg);

echo "<br>";
<?php
class Documentos extends ChecaDocumentos {
    private $numero;
    private $dataEmissao;
    private $orgao;
    private $nacionalidade;
    private $naturalidade;

    protected function verDocumento()
    {
        // TODO: Implement verDocumento() method.

        $this->getNumero();
    }

    protected function addDocumento($add)
    {
        // TODO: Implement addDocumento() method.
        $this->setNumero($add);
    }

    /**
     * @return mixed
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    /**
     * @param mixed $nacionalidade
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    /**
     * @return mixed
     */
    public function getNaturalidade()
    {
        return $this->naturalidade;
    }
    /**
     * @param mixed $naturalidade
     */
    public function setNaturalidade($naturalidade)
    {
        $this->naturalidade = $naturalidade;
    }
    /**
     * @return mixed
     */
    public function getOrgao()
    {
        return $this->orgao;
    }
    /**
     * @param mixed $orgao
     */
    public function setOrgao($orgao)
    {
        $this->orgao = $orgao;
    }
    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }
    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    /**
     * @return mixed
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }
    /**
     * @param mixed $dataEmissao
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }
}
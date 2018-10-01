<?php
class Documentos{
    private $numero;
    private $dataEmissao;
    private $orgao;
    private $pai;
    private $mae;
    private $registro;
    private $nacionalidade;
    private $naturalidade;
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
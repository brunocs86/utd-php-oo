<?php

abstract class ChecaDocumentos{
    abstract protected function verDocumento();
    abstract protected function addDocumento($add);
    abstract protected function getNumero();

    public function imprimir(){
        print $this->verDocumento();
    }
}
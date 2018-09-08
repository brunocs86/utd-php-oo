<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 07/09/2018
 * Time: 22:36
 */

namespace LojaAgua\entidades;


class Pedido{

    private $id;
    private $hora;
    private $usuario;

    public function __construct($id = 0,$hora= "0000-00-00 00:00:00" ,$usuario = 0,$itens= array()){
        $this->id = $id;
        $this->hora = $hora;
        $this->usuario = $usuario;
        $this->itens = $itens;

    }

    public static function construct($array){
        $obj = new Pedidos();
        $obj->setId( $array['id']);
        $obj->setHora( $array['hora']);
        $obj->setUsuario( $array['usuario']);
        $obj->setItens( $array['itens']);
        return $obj;

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora){
        $this->hora=$hora;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }

    public function getItens(){
        return $this->itens;
    }

    public function setItens($itens){
        $this->itens=$itens;
    }
    public function equals($object){
        if($object instanceof Pedidos){

            if($this->id!=$object->id){
                return false;

            }

            if($this->hora!=$object->hora){
                return false;

            }

            if($this->usuario!=$object->usuario){
                return false;

            }

            if($this->itens!=$object->itens){
                return false;

            }

            return true;

        }
        else{
            return false;
        }

    }
    public function toString(){

        return "  [id:" .$this->id. "]  [hora:" .$this->hora. "]  [usuario:" .$this->usuario. "]  [itens:" .$this->itens. "]  " ;
    }

}
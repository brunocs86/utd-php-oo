<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 09/09/2018
 * Time: 21:21
 */

namespace LojaAgua\persistencia;

use  Doctrine\ORM\EntityManager;
use  Doctrine\ORM\Tools\Setup;
use  LojaAgua\persistencia\AbstractDAO;
use  LojaAgua\entidades\Usuario;

class UsuarioDAO extends AbstractDAO
{
    public function __construct()
    {
        parent::__contruct('LojaAgua\entidades\Usuario');
    }
}
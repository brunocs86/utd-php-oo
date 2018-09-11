<?php
/*/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 10/09/2018
 * Time: 22:49
 */

namespace LojaAgua\persistencia;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

abstract class AbstractDAO
{
    public $entityManager;
    private $entityPath;

    public function __construct($entityPath)
    {
        $this->entityPath = $entityPath;
        $this->entityManager = $this->createEntityManager();
    }

    public function createEntityManager(){
        $path = array(
            'Loja/entidades'
        );

        $devMode = true;

        $config = Setup::createAnnotationMetadataConfiguration($path, $devMode);

        $connectionOptions = array(
            'dbname' => 'vendaagua',
            'user' => 'root',
            'password' => '12345678',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        );

        return EntityManager::create($connectionOptions, $config);
    }

    public function insert($user){
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
    public function update($user){
        $this->entityManager->merge($user);
        $this->entityManager->flush();
    }
    public function delete($id){
        $this->entityManager->remove($id);
        $this->entityManager->flush();
    }
    public function findById($id){

        return $this->entityManager ->find('LojaAgua\entidades\Usuario' ,$id);
    }
    public function findAll(){
        $collection = $this->entityManager->getRepository($this->entityPath)->findAll();

        $data = array();
        foreach ($collection as $obj){
            $data [] = $obj;
        }

        return $data;
    }

}

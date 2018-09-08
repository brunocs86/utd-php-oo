<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 07/09/2018
 * Time: 23:05
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

//Create a simple "default" Doctrine ORM configuration for annotations

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/LojaAgua/entidades"), $isDevMode);

//database configuration parameter
$conn = array(
  'dbname' => 'vendaagua',
  'user' => 'root',
  'password' => '12345678',
  'host' => 'localhost',
  'driver' => 'pdo_mysql'
);

//obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
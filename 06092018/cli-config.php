<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 07/09/2018
 * Time: 23:05
 */
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
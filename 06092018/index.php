<?php
/**
 * Created by PhpStorm.
 * User: bcs
 * Date: 07/09/2018
 * Time: 22:17
 */

$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;

$u = new Usuario();
$u->login = "ivan filipe 2";

echo "Hello ".$u->login;
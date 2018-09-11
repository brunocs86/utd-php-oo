<?php

$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;
use LojaAgua\entidades\Pedido;
use LojaAgua\persistencia\UsuarioDAO;
use LojaAgua\persistencia\PedidoDAO;

$user = new Usuario(0, "rebeca@gmail.com", "123", "rua X");
$dao = new UsuarioDAO();

$dao->insert($user);
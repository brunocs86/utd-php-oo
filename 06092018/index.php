<?php

$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;
use LojaAgua\entidades\Pedido;
use LojaAgua\persistencia\UsuarioDAO;
use LojaAgua\persistencia\PedidoDAO;

// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
date_default_timezone_set('America/Sao_Paulo');

$user = new Usuario(0, "nega@gmail.com", "123", "rua X");
$dao = new UsuarioDAO();

$dao->insert($user);

$time = new DateTime("now");
$pedido = new Pedido(0, $time, null, array());
$dao2 = new PedidoDAO($pedido);

$dao2->insert($pedido);
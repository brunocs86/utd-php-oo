<?php

$myVar = function ($nome){
    echo "Ola ".$nome."<br>";
};

$myVar('Teste');
$myVar('Mundo');

$message = 'hello';

$exemplo = function(){
    //var_dump($message);
    echo "<br>";
};

$message = 'hello';
$exemplo();

$exemplo = function() use($message){
    var_dump($message);
    echo "<br>";
};

$exemplo();

$message = 'world';
$exemplo();

$exemplo = function($arg) use($message){
    var_dump($arg.' '.$message);
    echo "<br>";
};
$exemplo("Hello");

$myVar = function ($nome){
    echo "Ola ".$nome."<br>";
};

$myVar('Teste');
$myVar('Mundo');

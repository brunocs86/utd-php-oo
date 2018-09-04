<!DOCTYPE html>
<html>
<head>
    <title>PHP OO- Operadores</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>

<div class="container-fluid">
    <!--NavBar-->
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light py-3 box-shadow">

        <a class="navbar-brand" href="index.php">
            <img src="http://utd.sct.ce.gov.br/templates/template_GOV/img/logo.png" alt="Caravan">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h2 class="text-success ml-md-2">PHP Orientado à Objetos - Operadores</h2>
                </li>
            </ul>
        </div>
    </nav>
    <!--NavBar End-->
</div>

<div class="container-fluid py-2">
    <div class="row">

        <div class="col-xl-5 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Operadores no PHP</h2>
                </div>
                <div class="card-body">
                    &lt;?php<br>
                    // ATRIBUIÇÃO<br>
                    $nome = "Marcus";<br>
                    $valor = 100;<br>
                    <br>
                    //CONCATENCAÇÃO<br>
                    echo $nome." Carvalho";<br>
                    <br>
                    //COMPOSTO<br>
                    $nome .= " Programador";<br>
                    echo "<br>";
                    echo $nome;<br>
                    <br>
                    //ADIÇÃO - ATRIBUIÇÃO<br>
                    $valor += 50;<br>
                    echo "<br>";
                    echo $valor;<br>
                    <br>
                    //SUBTRAÇÃO - ATRIBUIÇÃO<br>
                    $valor -= 50;<br>
                    echo "<br>";
                    echo $valor;<br>
                    <br>
                    //MULTIPLICAÇÃO - ATRIBUIÇÃO<br>
                    $valor *= 0.4; //também pode ser usado apenas .4<br>
                    echo "<br>";
                    echo $valor;<br>
                    <br>
                    //ARITMÉTICOS<br>
                    $a = 10;<br>
                    $b = 5;<br>
                    <br>
                    //ADIÇÃO<br>
                    echo "<br>";
                    echo $a + $b;<br>
                    <br>
                    //SUBTRAÇÃO<br>
                    echo "<br>";
                    echo $a - $b;<br>
                    <br>
                    //MULTIPLICAÇÃO<br>
                    echo "<br>";
                    echo $a * $b;<br>
                    <br>
                    //DIVISÃO<br>
                    echo "<br>";
                    echo $a / $b;<br>
                    <br>
                    //MÓDULO<br>
                    echo "<br>";
                    echo $a % $b;<br>
                    <br>
                    //EXPONENCIAÇÃO<br>
                    echo "<br>";
                    echo $a ** $b;<br>
                    <br>
                    //COMPARAÇÃO<br>
                    $c = 20;<br>
                    $d = 30;<br>
                    $e = 50.4;<br>
                    <br>
                    echo "<br>";
                    var_dump($c > $d);<br>
                    echo "<br>";
                    var_dump($c < $d);<br>
                    echo "<br>";
                    var_dump($c == $d);<br>
                    echo "<br>";
                    var_dump($c === $d);<br>
                    echo "<br>";
                    var_dump($c === $e);<br>
                    echo "<br>";
                    var_dump($c != $d);<br>
                    echo "<br>";
                    var_dump($c !== $d);<br>
                    echo "<br>";
                    var_dump($c !== $e);<br>
                    <br>
                    //SPACE SHIP<br>
                    $var01 = 30;<br>
                    $var02 = 50;<br>
                    $var03 = 50;<br>
                    echo "<br>";
                    var_dump($var01 <=> $var02);<br>
                    echo "<br>";
                    var_dump($var02 <=> $var01);<br>
                    echo "<br>";
                    var_dump($var02 <=> $var03);<br>
                    <br>
                    //VERIFICADOR<br>
                    $var04 = NULL;<br>
                    $var05 = NULL;<br>
                    $var06 = 50;<br>
                    echo "<br>";
                    echo $var04 ?? $var05 ?? $var06;<br>
                    <br>
                    //INCREMENTAL<br>
                    $inc = 10;<br>
                    echo "<br>";
                    echo $inc++;<br>
                    echo "<br>";
                    echo $inc;<br>
                    echo "<br>";
                    echo $inc--;<br>
                    echo "<br>";
                    echo $inc;?><br>
                </div>
            </div>
        </div>

        <div class="col-xl-7 col-md-12">
            <div class="row">

                <div class="col-xl-12 col-md-12 pb-2">
                    <div class="card">
                        <div class="card-header">
                            <h2>PHP - Operadores de execução</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                Os operadores de execução `` (acentos graves) são utilizados para executar comandos no shell
                            </p>
                            <div class="alert alert-secondary">

                                &lt;?php
                                $output = `ls -al`;
                                echo "<pre>$output</pre>";
                                ?>
                            </div>
                            <div class="alert alert-success">

                                <?php
                                $output = `ls -al`;
                                echo "<pre>$output</pre>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12 py-2">
                    <div class="card">
                        <div class="card-header">
                            <h2>PHP - Operadores de Controle de Erro</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                O operador de controle de erro @ (arroba) é utilizada acompanhando expressões PHP, fazendo com que erros nestas senham ignorados
                            </p>
                            <div class="alert alert-secondary">

                                &lt;?php

                                $x = @$a["name"];

                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12 pb-2">
                    <div class="card">
                        <div class="card-header">
                            <h2>PHP - Operadores de Arrays</h2>
                        </div>
                        <div class="card-body">
                            <p>Os operadores de Array são utilizados para executar ações entre arrays</p>
                            <div class="alert alert-secondary">

                                &lt;?php<br>
                                    $a = array("a" => "maçã", "b" => "banana");<br>
                                    $b = array("a" =>"pêra", "b" => "framboesa", "c" => "morango");<br>
                                    $c = $a + $b; // Uniao de $a e $b
                                ?>
                            </div>
                            <div class="alert alert-success">
                                <?php
                                    $a = array("a" => "maçã", "b" => "banana");
                                    $b = array("a" =>"pêra", "b" => "framboesa", "c" => "morango");

                                    $c = $a + $b; // Uniao de $a e $b
                                    echo "União de \$a e \$b: \n";
                                    var_dump($c);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12 pb-2">
                    <div class="card">
                        <div class="card-header">
                            <h2>PHP - Operadores bit a bit</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                Operadores de que permitem avaliação e modificação de bits específicos em um tipo inteiro
                            </p>
                            <div class="alert alert-secondary">

                                &lt;?php
                                    $values = array(0, 1, 2, 4, 8);
                                    $test = 1 + 4;

                                    echo "\n Operador de bit E \n";
                                    foreach ($values as $value) {
                                        $result = $value & $test;
                                        printf($format, $result, $value, '&', $test);
                                    }
                                ?>
                            </div>
                            <div class="alert alert-success">
                                <?php
                                    $values = array(0, 1, 2, 4, 8);
                                    $test = 1 + 4;

                                    echo "\n Operador de bit E \n";
                                    foreach ($values as $value) {
                                        $result = $value & $test;
                                        echo "<br>".$format, $result, $value, '&', $test;
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="bg-light text-success fixed-bottom">

    <div class="container">
        <div class="row">

            <div class="col-xl-6 col-md-6 mt-4">
                <ul class="list-unstyled">
                    <li><p> &copy; 2018 - Todos os direitos reservados. </p></li>
                </ul>
            </div>

            <div class="col-xl-2 col-md-3 ml-auto">
                <ul class="list-unstyled text-secondary font-weight-bold">
                    <li><a class="btn btn-outline-success btn-sm my-1 btn-block" href="https://github.com/brunocs86" target="_blank"><i class="fa fa-github-alt mr-2"></i>GitHub</a></li>
                    <li><a class="btn btn-outline-success btn-sm mb-1 btn-block" href="https://twitter.com/TemorYehsua" target="_blank"><i class="fa fa-twitter-square mr-2"></i>Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="js/jquery331.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>
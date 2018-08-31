<!DOCTYPE html>
<html>
<head>
    <title>PHP OO- Laços</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>

<div class="container-fluid">
    <!--NavBar-->
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light py-3 box-shadow">

        <a class="navbar-brand" href="#">
            <img src="http://utd.sct.ce.gov.br/templates/template_GOV/img/logo.png" alt="Caravan">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h2 class="text-success ml-md-2">PHP Orientado à Objetos - Laços</h2>
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
                    <div class="w3-panel w3-card w3-light-grey">
                        <h3>Example</h3>
                        <div class="w3-code notranslate">
                            <?php echo htmlentities('<?php
                                $minhaIdade = 31;

                                $idadeMenor = 12;
                                $idadeMaior = 18;
                                $idoso = 60;

                                //IF - ELSE IF - ELSE
                                if ($minhaIdade < $idadeMenor) {
                                    echo "Criança";
                                } else if($minhaIdade < $idadeMaior) {
                                    echo "Adolecente";
                                } else if ($minhaIdade < $idoso) {
                                    echo "Adulto";
                                } else { //O Else deve aparecer uma única vez no bloco.
                                    echo "Idoso";
                                }

                                

                                //TERNARIO
                                echo ($minhaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";

                                

                                //SWITCH - CASE
                                $diaDaSemana = date("w");
                                echo "O dia de semane é: ".$diaDaSemana;
                                

                                switch ($diaDaSemana) {
                                    case 0:
                                        echo "Domingo";
                                        break;
                                    case 1:
                                        echo "Segunda";
                                        break;
                                    case 2:
                                        echo "Terça";
                                        break;
                                    case 3:
                                        echo "Quarta";
                                        break;
                                    case 4:
                                        echo "Quinta";
                                        break;
                                    case 5:
                                        echo "Sexta";
                                        break;
                                    case 6:
                                        echo "Sábado";
                                        break;

                                    default:
                                        echo "Data inválida";
                                        break;
                                }

                                

                                //FOR
                                for ($i = 0; $i < 10; $i++) {
                                    echo $i;
                                    
                                }

                                
                                //
                                

                                //FOREACH
                                $meses = array(
                                    "Jan", "Fev", "Mar",
                                    "Abr", "Mai", "Jun",
                                    "Jul", "Ago", "Set",
                                    "Out", "Nov", "Dec"
                                );

                                //foreach ($meses as $mes) {
                                //    echo "O mês é: ".$mes;
                                
                                //}

                                foreach ($meses as $index => $mes) {
                                    echo "Index: ".$index.;
                                    echo "O mês é: ".$mes.;
                                }
                               ?>'); ?>
                        </div>
                    </div>
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
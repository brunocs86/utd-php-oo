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
        <div class="col-xl-6 col-md-12 pb-2">
            <div class="card">
                <div class="card-header">
                    <h2>PHP - Array Bidimensional (Manualmente)</h2>
                </div>
                <div class="card-body">

<?php
highlight_string(
'<?php
$m = array("Fulano" => array("rg" => "00.000.000-1", "cpf" => "000.000.000-01"),
"Ciclano" => array("rg" => "10.100.100-X", "cpf" => "100.100.100-01"),
"Beltrano" => array("rg" => "11.111.111-1", "cpf" => "111.111.111-01"));
echo("Pessoas cadastradas..." .
?>')
?>
                    </div>

                    <div class="alert alert-success">
                        <?php
                        $m = array("Fulano" => array("rg" => "00.000.000-1", "cpf" => "000.000.000-01"),
                            "Ciclano" => array("rg" => "10.100.100-X", "cpf" => "100.100.100-01"),
                            "Beltrano" => array("rg" => "11.111.111-1", "cpf" => "111.111.111-01"));
                        echo("Pessoas cadastradas..." .

                            "<BR><BR>Fulano: " .
                            "<BR>RG: " . $m['Fulano']['rg'] .
                            "<BR>CPF: " . $m['Fulano']['cpf'] .

                            "<BR><BR>Ciclano: " .
                            "<BR>RG: " . $m['Ciclano']['rg'] .
                            "<BR>CPF: " . $m['Ciclano']['cpf'] .

                            "<BR><BR>Beltrano: " .
                            "<BR>RG: " . $m['Beltrano']['rg'] .
                            "<BR>CPF: " . $m['Beltrano']['cpf']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 pb-2">
            <div class="card">
                <div class="card-header">
                    <h2>PHP - Array Bidimensional (array_push)</h2>
                </div>
                <div class="card-body">
                    <p>
                        Segue abaixo código utilizado:
                    </p>
                    <div class="alert alert-warning">
                        <?php
highlight_string(
'<?php
                            $pessoa = array();

                            array_push(
                                $pessoa, array(
                                \'Name\' =>\'Marcus\',
                                \'idade\'=>32,
                                \'Nascimento\'=>6545461651561651
                            ));

                            print_r($pessoa);
                        ?>')
                        ?>
                    </div>

                    <div class="alert alert-success">
                        <?php
                            $pessoa = array();

                            array_push(
                                $pessoa, array(
                                'Name' =>'Marcus',
                                'idade'=>32,
                                'Nascimento'=>6545461651561651
                            ));

                            print_r($pessoa);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light text-success">

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
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
                    <h2>PHP - Laço do-While</h2>
                </div>
                <div class="card-body">
                    <p>
                        O laço Do-While utilizado para localizar um valor qualquer no seguinte array:
                    </p>
                    <div class="alert alert-secondary">

                        array(17, 1, 32, 94, 24, 86);

                    </div>
                    <p>
                        Segue abaixo código utilizado:
                    </p>
                    <div class="alert alert-warning">
                        <?php
                        highlight_string(
                            '<?php
                        $vetor = array(17, 1, 32, 94, 24, 86);
                        $i = 0;
                        $x = 33;
                        $bo = true;
                        $num = sizeof($vetor);


                        do {
                            if ($x == $vetor[$i]){
                                echo "O valor informado: ".$x.", está na posição ".++$i.".";
                                $bo = false;
                                break;
                            }
                            ++$i;
                        }while( $i < $num );

                        if ($bo){
                            echo "O valor desejado: ".$x.",  não está no vetor.";
                        }
                        ?>')
                        ?>
                    </div>

                    <div class="alert alert-success">
                        <?php
                        $vetor = array(17, 1, 32, 94, 24, 86);
                        $i = 0;
                        $x = 33;
                        $bo = true;
                        $num = sizeof($vetor);


                        do {
                            if ($x == $vetor[$i]){
                                echo "O valor informado: ".$x.", está na posição ".++$i.".";
                                $bo = false;
                                break;
                            }
                            ++$i;
                        }while( $i < $num );

                        if ($bo){
                            echo "O valor desejado: ".$x.",  não está no vetor.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 pb-2">
            <div class="card">
                <div class="card-header">
                    <h2>PHP - Laço While</h2>
                </div>
                <div class="card-body">
                    <p>
                        O laço While utilizado para localizar um valor qualquer no seguinte array:
                    </p>
                    <div class="alert alert-secondary">

                        array(17, 1, 32, 94, 24, 86);

                    </div>
                    <p>
                        Segue abaixo código utilizado:
                    </p>
                    <div class="alert alert-warning">
                        <?php
                        highlight_string(
                            '<?php
                    $vetor = array(17, 1, 32, 94, 24, 86);
                    $i = 0;
                    $x = 32;
                    $bo = true;
                    $num = sizeof($vetor);
                    
                    
                    while ( $i < $num ){
                        if ($x == $vetor[$i]){
                            echo "O valor informado: ".$x.", está na posição ".++$i.".";
                            $bo = false;
                            break;
                        }
                        ++$i;
                    }
                    
                    if ($bo){
                        echo "O valor desejado: ".$x.",  não está no vetor.";
                    }
                    ?>')
                        ?>
                    </div>

                    <div class="alert alert-success">
                        <?php
                        $vetor = array(17, 1, 32, 94, 24, 86);
                        $i = 0;
                        $x = 32;
                        $bo = true;
                        $num = sizeof($vetor);


                        while ( $i < $num ){
                            if ($x == $vetor[$i]){
                                echo "O valor informado: ".$x.", está na posição ".++$i.".";
                                $bo = false;
                                break;
                            }
                            ++$i;
                        }

                        if ($bo){
                            echo "O valor: ".$x.", desejado não está no vetor.";
                        }
                        ?>
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
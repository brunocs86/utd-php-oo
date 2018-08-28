<!DOCTYPE html>
<html>
<head>
    <title>Intro PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>

<div class="item1">
    <!--NavBar-->
    <nav class="navbar navbar-expand-md navbar-light bg-light py-3 box-shadow">

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
                    <h2 class="text-success ml-md-2">PHP Orientado à Objetos - Variáveis</h2>
                </li>
            </ul>
        </div>
    </nav>
    <!--NavBar End-->
</div>

<div class="container-custom">
    <div class="item2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Variáveis no PHP</h2>
                    </div>
                    <div class="card-body">
                        <p>Dentro do PHP, as variáveis devem começar com $</p>
                        <div class="alert alert-secondary">
                            $name = "Marcus"; <br>
                            echo $name;

                        </div>
                        <div class="alert alert-success">
                            <?php
                            $name = "Marcus";
                            echo $name;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Tipos de variáveis</h2>
                    </div>
                    <div class="card-body">
                        <p>Dentro do PHP, podemos saber o tipo de variável<br>utiliando a palavra reservada var_dump</p>
                        <div class="alert alert-secondary">
                            $name = "Marcus"; <br>
                            var_dump($name);
                        </div>
                        <div class="alert alert-success">
                            <?php
                            $name = "Marcus";
                            var_dump($name);
                            ?>
                        </div>
                        <p>Recebemos como resultado o tipo, tamanho<br>e valor da variável alocada.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="item3 ml-0">
        <div class="container"></div>

        <div class="card">
            <div class="card-header text-center">
                <h2>Tipos de variáveis</h2>
            </div>
            <div class="card-body">

                <nav class="justify-content-center">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tipos escalares</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tipos compostos</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tipos especiais</a>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                            <div class="row mt-4 justify-content-center">

                                <div class="col-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>Boleano</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-secondary">
                                                $foo = True; <br>
                                                echo $foo;
                                            </div>
                                            <div class="alert alert-success">
                                                <?php
                                                $foo = True;
                                                echo $foo;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>Integer</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-secondary">
                                                $a = 20; <br>
                                                echo $a;
                                            </div>
                                            <div class="alert alert-success">
                                                <?php
                                                $a = 20;
                                                echo $a;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 pt-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>Float</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-secondary">
                                                $b = 2.75; <br>
                                                echo $a;
                                            </div>
                                            <div class="alert alert-success">
                                                <?php
                                                $b = 2.75;
                                                echo $b;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 pt-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>String</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-secondary">
                                                $name = "Marcus"; <br>
                                                echo $name;
                                            </div>
                                            <div class="alert alert-success">
                                                <?php
                                                $name = "Marcus";
                                                echo $name;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo
                            est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit
                            magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur
                            ut ullamco ea tempor duis.</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit
                            fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo
                            aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia
                            elit do ipsum ullamco Lorem. Ullamco ut ad minim do mollit labore ipsum laboris ipsum commodo sunt tempor enim incididunt. Commodo quis sunt dolore
                            aliquip aute tempor irure magna enim minim reprehenderit. Ullamco consectetur culpa veniam sint cillum aliqua incididunt velit ullamco sunt ullamco
                            quis quis commodo voluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua pariatur mollit voluptate voluptate consequat non.
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>

    <div class="item4">
        <footer class="bg-light text-success">

            <div class="container p-0">
                <div class="row">

                    <div class="col-6 mt-3">
                        <ul class="list-unstyled">
                            <li><p> &copy; 2018 - Todos os direitos reservados. </p></li>
                        </ul>
                    </div>

                    <div class="col-3 ml-auto">
                        <ul class="list-unstyled text-secondary font-weight-bold">
                            <li><a class="btn btn-outline-success my-1 btn-block" href="https://github.com/brunocs86" target="_blank"><i class="fa fa-github-alt mr-2"></i>GitHub</a></li>
                            <li><a class="btn btn-outline-success btn-block" href="https://twitter.com/TemorYehsua" target="_blank"><i class="fa fa-twitter-square mr-2"></i>Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
    </div>
</div>
</body>
<script src="js/jquery331.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>
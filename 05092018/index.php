<?php
    require_once("logica-usuario.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aula Bootstrap - Formulario</title>

    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<!-- Menu -->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar navbar-light bg-primary">
        <div class="container">

            <a class="navbar-brand waves-effect" target="_blank" href="http://www.brmy.tk">
                <strong class="text-capitalize text-light">brMY!</strong>
            </a>
            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-outline-light dropdown-toggle btn-sm" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <strong>Home</strong>
                            </button>
                            <div class="dropdown-menu bg-primary" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item text-light bg-primary" type="button">Nossa Empresa</button>
                                <button class="dropdown-item text-light bg-primary" type="button">Sobre nós</button>
                                <button class="dropdown-item text-light bg-primary" type="button">Contato</button>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav nav-flex-icons">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light btn-sm" type="submit">
                                <i class="fa fa-search mr-3"></i>
                                <strong>Search</strong>
                            </button>
                        </form>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
</header>

<!-- Form-->
    <?php if(usuarioEstaLogado()) {?>
        <p class="text-success">Você está logado como <?= usuarioLogado() ?>. <a href="logout.php">Deslogar</a></p>
    <?php } else {?>
        <section class="mt-5 pt-5 mb-5 pb-5">
            <div class="container mt-3">
                <div class="row justify-content-center">


                    <div class="col-8">
                        <div class="card">
                            <h5 class="card-header primary-color white-text text-center py-4">
                                <strong>Sing in</strong>
                            </h5>

                            <div class="card-body px-lg-5 pt-0">
                                <form class="text-center was-validated form-color-style" action="login.php" method="post">

                                    <div class="md-form">
                                        <input type="email" id="materialLoginFormEmail" class="form-control">
                                        <label for="materialLoginFormEmail">E-mail</label>
                                    </div>

                                    <div class="md-form">
                                        <input type="password" id="materialLoginFormPassword" class="form-control" aria-label="Password">
                                        <label for="materialLoginFormPassword">Password</label>
                                    </div>

                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                                        Sign in<i class="fa fa-sign-in ml-3"></i>
                                    </button>

                                    <div class="custom-control custom-checkbox text-left mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" checked>
                                        <label class="custom-control-label" for="customControlValidation1">Lembrar-me</label>
                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <?php } ?>

<!--<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div>
</div>-->

<!-- Footer -->
<nav class="container">
    <nav class="navbar fixed-bottom navbar-expand-md navbar-light bg-primary">
        <a class="navbar-brand text-light" href="#">&copy; 2018 - Todos os direitos reservados</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</nav>

</body>
<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery331.js"></script>
    <!-- Popper -->
    <script type="text/javascript" src="js/popper.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

</html>
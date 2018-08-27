<!DOCTYPE html>
<html>
<head>
	<title>Intro PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
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
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h2>Tipos de variáveis</h2>
                </div>
                <div class="card-body">
                    <h3>Tipos escalares</h3>
                    <ul>
                        <li>Boolean</li>
                        <li>integer</li>
                        <li>float</li>
                        <li>String</li>
                    </ul>
                    <h3>Tipos compostos</h3>
                    <ul>
                        <li>array</li>
                        <li>object</li>
                        <li>callable</li>
                    </ul>
                    <h3>Tipos especiais</h3>
                    <ul>
                        <li>resorce</li>
                        <li>NULL</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h2>Tipos de variáveis</h2>
                </div>
                <div class="card-body">
                    <p>Dentro do PHP, podemos saber o tipo de variável utiliando a palavra reservada var_dump</p>
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
                    <p>Recebemos como resultado o tipo, tamanho e valor da variável alocada.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-4">
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
        <div class="col-4">
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
        <div class="col-4">
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
    </div>
    <div class="row mt-4">
        <div class="col-4">
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
</body>
<script src="js/jquery331.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>
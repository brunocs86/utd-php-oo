<!DOCTYPE html>
<html>
<head>
	<title>Intro PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
        <div class="col-3">
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
<!--<nav class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit
            proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod
            id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit
            eu exercitation irure Lorem incididunt nostrud.
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
</nav>-->
</body>
<script src="js/jquery331.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>
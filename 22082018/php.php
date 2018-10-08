<!DOCTYPE html>
<html>
<head>
    <title>UTD PHP - OO - Avaliação</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>

<div class="container-fluid">
    <!--NavBar-->
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-info py-3 box-shadow">

        <a class="navbar-brand text-white" href="#">UTD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-white" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.html">Home<span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="php.php">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contato</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <h2 class="text-white ml-md-2">Bruno Carlos Silva</h2>
                </li>
            </ul>
        </div>
    </nav>
    <!--NavBar End-->
</div>

<div class="container-fluid py-2">
    <div class="row">

        <div class="col-xl-3 col-md-12">
            <div class="row">

                <div class="col-md-12 pt-2">
                    <div class="card">
                        <div class="card-header">
                            <h3>Criação de variável</h3>
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

                <hr>

                <div class="col-md-12 pt-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Criação de array</h3>
                        </div>
                        <div class="card-body">
                            <p>A criação de array, dentro outas maneiras, pode feita conforme abaixo</p>
                            <div class="alert alert-secondary">
                                $name1 = array(); <br>
                                $name2 = []; <br>
                                var_dump($name1);<br>
                                var_dump($name2);
                            </div>
                            <div class="alert alert-success">
                                <?php
                                    $name1 = array();
                                    $name2 = [];
                                    var_dump($name1);
                                    echo "<br>";
                                    var_dump($name2);
                                ?>
                            </div>
                            <p>Recebemos como resultado o tipo, tamanho e valor da variável<br>alocada.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pt-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Adicionando elemento no array</h3>
                        </div>
                        <div class="card-body">
                            <p>A adição de elemento no array ocoore utilizando indice, chaves ou com funções
                                disponibilizadas pelo próprio php </p>
                            <div class="alert alert-secondary">
                                $name = [10, 12]; <br>
                                array_push($name, 7, 15, 21);<br>
                                print_r($name);
                            </div>
                            <div class="alert alert-success">
                                <?php
                                $name = [10, 12];
                                array_push($name, 7,15, 21);
                                print_r($name);
                                ?>
                            </div>
                            <p>Com a função do php array_push inserimor três elementos ao final do array.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-9 col-md-12 pt-2">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Estruturas de</h2>
                </div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Repetição</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Condição</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row justify-content-center">

                                <div class="col-xl-5 col-md-6 pt-3">
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

                                <div class="col-xl-5 col-md-6 pt-3">
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

                                <div class="col-xl-5 col-md-6 pt-3">
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

                                <div class="col-xl-5 col-md-6 pt-3">
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

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-array-tab" data-toggle="tab" href="#nav-array" role="tab" aria-controls="nav-array" aria-selected="true">Array</a>
                                    <a class="nav-item nav-link" id="nav-object-tab" data-toggle="tab" href="#nav-object" role="tab" aria-controls="nav-object" aria-selected="false">Object</a>
                                    <a class="nav-item nav-link" id="nav-callable-tab" data-toggle="tab" href="#nav-callable" role="tab" aria-controls="nav-callable" aria-selected="false">Callable</a>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tab2Content">
                                <div class="tab-pane fade show active" id="nav-array" role="tabpanel" aria-labelledby="nav-array-tab">
                                    <div class="col-xl-12 col-md-6 pt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h2>Array</h2>
                                                <p>São estruturas de dados que possibilitam em uma única variável armazenar diversos
                                                    valores. Eles podem ser classificados ainda como: Numérico, associativo e multidimensional</p>

                                            </div>
                                            <div class="card-body m-1">

                                                <div class="row pb-2">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Numérico</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <p>Os valores são indexados por numeral algébrico, armazenados e acessados de forma linear </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Associativo</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <p>Os valores são indexados de modo nominal, onde uma palavra servirá como chave para acessar o valor armazenado</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Multidimensional</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <p>Trata-se um array onde cada indice pode conter outro array de modo sucessivo, ou seja um meta-array</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="alert alert-success">
                                                    <p>Ex¹:</p>

                                                    <dl class="row">
                                                        <dl class="col-xl-4 col-md-8">
                                                            <dt class="col-sm-12">Númerico</dt>
                                                            <dd class="col-sm-12">
                                                                <a class="btn btn-outline-success text-left" href="#">
                                                                    &lt;?php <br>
                                                                    $numbers = array( 1, 2, 3, 4, 5);<br>

                                                                    foreach( $numbers as $value )<br>
                                                                    {<br>
                                                                    echo "Value is $value";<br>
                                                                    }?><br>
                                                                </a><br>
                                                                <p>Resultado: </p>
                                                                <a class="btn btn-outline-success text-left" href="#">
                                                                    <?php
                                                                    $numbers = array( 1, 2, 3, 4, 5);

                                                                    foreach( $numbers as $value )
                                                                    {
                                                                        echo "Value is $value <br>";
                                                                    }?>
                                                                </a>
                                                            </dd>
                                                        </dl>
                                                        <dl class="col-xl-4 col-md-8">
                                                            <dt class="col-sm-12">Associativo</dt>
                                                            <dd class="col-sm-12">
                                                                <a class="btn btn-outline-success text-left" href="#">
                                                                    &lt;?php <br>
                                                                    $salaries = array(<br>
                                                                    "mohammad" => 2000,<br>
                                                                    "qadir" => 1000,<br>
                                                                    "zara" => 500);<br>
                                                                    ?><br>
                                                                </a><br>
                                                                <p>Resultado: </p>
                                                                <a class="btn btn-outline-success  text-sm-left text-left" href="#">
                                                                    <?php
                                                                    $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);

                                                                    echo "Salary of mohammad is ". $salaries['mohammad'] . "<br>";
                                                                    echo "Salary of qadir is ".  $salaries['qadir']. "<br>";
                                                                    echo "Salary of zara is ".  $salaries['zara']. "<br>";
                                                                    ?>
                                                                </a>
                                                            </dd>
                                                        </dl>
                                                        <dl class="col-xl-4 col-md-8">
                                                            <dt class="col-sm-12">Multidimensional</dt>
                                                            <dd class="col-sm-12">
                                                                <a class="btn btn-outline-success text-left" href="#">
                                                                    &lt;?php <br>
                                                                    $marks = array( <br>
                                                                    "mohammad" => array ( <br>
                                                                    "physics" => 35,  <br>
                                                                    "maths" => 30, <br>
                                                                    "chemistry" => 39 <br>
                                                                    ), <br>
                                                                    <br>
                                                                    "qadir" => array (<br>
                                                                    "physics" => 30,<br>
                                                                    "maths" => 32,<br>
                                                                    "chemistry" => 29<br>
                                                                    ),<br>
                                                                    <br>
                                                                    "zara" => array (<br>
                                                                    "physics" => 31,<br>
                                                                    "maths" => 22,<br>
                                                                    "chemistry" => 39<br>
                                                                    )<br>
                                                                    );?> <br>
                                                                </a><br>
                                                                <p>Resultado: </p>
                                                                <a class="btn btn-outline-success text-left" href="#">
                                                                    <?php
                                                                    $marks = array(
                                                                        "mohammad" => array (
                                                                            "physics" => 35,
                                                                            "maths" => 30,
                                                                            "chemistry" => 39
                                                                        ),

                                                                        "qadir" => array (
                                                                            "physics" => 30,
                                                                            "maths" => 32,
                                                                            "chemistry" => 29
                                                                        ),

                                                                        "zara" => array (
                                                                            "physics" => 31,
                                                                            "maths" => 22,
                                                                            "chemistry" => 39
                                                                        )
                                                                    );

                                                                    /* Accessing multi-dimensional array values */
                                                                    echo "Marks for mohammad in physics : " ;
                                                                    echo $marks['mohammad']['physics'] . "<br />";

                                                                    echo "Marks for qadir in maths : ";
                                                                    echo $marks['qadir']['maths'] . "<br />";

                                                                    echo "Marks for zara in chemistry : " ;
                                                                    echo $marks['zara']['chemistry'] . "<br />";
                                                                    ?>
                                                                </a>
                                                            </dd>
                                                        </dl>
                                                    </dl>

                                                </div>
                                                <footer class="bg-secondary card-footer">
                                                    <p class="font-italic">¹ Aqui são apresentados as formas mais comuns,
                                                        porém vale ressaltar que existem diversas formas de se criar um array
                                                    </p>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-object" role="tabpanel" aria-labelledby="nav-object-tab">
                                    <div class="col-xl-12 col-md-6 pt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h2>Object</h2>
                                                <p>São estruturas instanciadas a partir de classes pré-definidas</p>

                                            </div>
                                            <div class="card-body">

                                                <div class="alert alert-secondary">
                                                    Uma instância individual da estrutura de dados definido por uma classe.
                                                    Você define uma classe, de uma vez e, em seguida, fazer muitos objetos que
                                                    pertencem a ele. Objetos também são conhecidos como exemplo.
                                                </div>

                                                <div class="alert alert-success justify-content-center">
                                                    <p>Ex¹:</p><br>
                                                    <a class="btn btn-outline-success text-left" href="#">
                                                        &lt;?php<br>
                                                        classe Exemplo{<br>
                                                        $nome = Bruno;<br>
                                                        <br>
                                                        function useExemplo{<br>
                                                        echo $nome;<br>
                                                        }<br>
                                                        }<br>
                                                        <br>
                                                        $usenome = new Exemplo;<br>
                                                        <br>
                                                        $usnome->useExemplo();<br>
                                                        ?><br>
                                                    </a>
                                                    <p>Resultado: </p>
                                                    <a class="btn btn-outline-success text-left" href="#">
                                                        <?php
                                                        class Exemplo{
                                                            var $nome = "Bruno";

                                                            function useExemplo()
                                                            {
                                                                echo $this->nome;
                                                            }
                                                        }?>
                                                        <?php
                                                        $usenome = new Exemplo;

                                                        $usenome->useExemplo();
                                                        ?>
                                                        <br>
                                                    </a>
                                                </div>
                                                <footer class="bg-secondary card-footer">
                                                    <p class="font-italic">¹ Aqui são apresentados as formas mais comuns,
                                                        porém vale ressaltar que existem diversas formas de se criar um object.
                                                    </p>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-callable" role="tabpanel" aria-labelledby="nav-callable-tab">
                                    <div class="col-xl-12 col-md-6 pt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h2>Callable</h2>
                                                <p>São variáveis que quando acompanhadas de parênteses execultam uma determinada função </p>

                                            </div>
                                            <div class="card-body">

                                                <div class="alert alert-secondary">
                                                    Se numa chamada de variável esta for acompanhada de parênteses no final dela, o PHP procurará uma função com o
                                                    mesmo nome do valor armazenado na variável e tentará executá-la.
                                                </div>

                                                <div class="alert alert-success justify-content-center">
                                                    <p>Ex¹:</p><br>
                                                    <a class="btn btn-outline-success text-left" href="#">
                                                        &lt;?php<br>
                                                        function foo() {<br>
                                                        echo "Chamou foo()<br>\n";<br>
                                                        }<br>
                                                        $func = 'foo';<br>
                                                        $func();<br>
                                                        ?><br>
                                                    </a>
                                                    <p>Resultado: </p>
                                                    <a class="btn btn-outline-success text-left" href="#">
                                                        <?php
                                                        function foo()
                                                        {
                                                            echo "Chamou foo()";
                                                        }
                                                        ?>
                                                        <?php
                                                        $func = 'foo';
                                                        $func();
                                                        ?>
                                                        <br>
                                                    </a>
                                                </div>
                                                <footer class="bg-secondary card-footer">
                                                    <p class="font-italic">¹ Este é apenas um exemplo das diversas formas
                                                        de se criar uma variável callable.
                                                    </p>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab3" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-resorce-tab" data-toggle="tab" href="#nav-resorce" role="tab" aria-controls="nav-resorce" aria-selected="true">Resorce</a>
                                    <a class="nav-item nav-link" id="nav-null-tab" data-toggle="tab" href="#nav-null" role="tab" aria-controls="nav-null" aria-selected="false">Null</a>
                                </div>
                            </nav>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<footer class="bg-info text-white">

    <div class="container">
        <div class="row">

            <div class="col-xl-6 col-md-6 mt-4">
                <ul class="list-unstyled">
                    <li><p> &copy; 2018 - Todos os direitos reservados. </p></li>
                </ul>
            </div>

            <div class="col-xl-2 col-md-3 ml-auto">
                <ul class="list-unstyled text-secondary font-weight-bold">
                    <li><a class="btn btn-outline-light btn-sm my-1 btn-block" href="https://github.com/brunocs86" target="_blank"><i class="fa fa-github-alt mr-2"></i>GitHub</a></li>
                    <li><a class="btn btn-outline-light btn-sm mb-1 btn-block" href="https://twitter.com/TemorYehsua" target="_blank"><i class="fa fa-twitter-square mr-2"></i>Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>
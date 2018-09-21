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
<div class="container">
    <?php
    echo "O valor de CAMPO 1 é: " . $_GET["campo1"];
    echo "<br>";
    echo "O valor de CAMPO 2 é: " . $_GET["campo2"];
    echo "<br>";
    echo "O valor de CAMPO 3 é: " . $_GET["campo3"];
    echo "<br>";
    echo "O valor de CAMPO 4 é: " . $_GET["campo4"];


    echo "<br>";
    echo "<br>";

    $desafio = function ($num1, $num2, $num3, $num4){

        $result1 = $num1 + $num2;
        echo "A soma é igual a ".$result1;
        echo "<br>";
        $result2 = $num3 * $num4;
        echo "A multiplicação é igual a ".$result2;
        echo "<br>";
        $result3 = $result2 / $result1;
        echo "A divisão de ".$result2." por ".$result1." é igual a ".$result3;

    };

    $desafio($_GET["campo1"], $_GET["campo2"], $_GET["campo3"], $_GET["campo4"]);
    echo "<br>";
    echo "<br>";
    ?>
    <a class="btn btn-outline-info" href="index.php">Voltar</a>

</div>

</body>
<script src="js/jquery331.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>

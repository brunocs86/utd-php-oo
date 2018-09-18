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
    echo "O valor de CAMPO 2 é: " . $_GET["campo3"];
    echo "<br>";
    echo "O valor de CAMPO 2 é: " . $_GET["campo4"];

$valor1 = $_GET["campo1"];
$valor2 = $_GET["campo2"];
$valor3 = $_GET["campo3"];
$valor4 = $_GET["campo4"];

    echo "<br>";
    echo "<br>";

    function desafio($num1, $num2, $num3, $num4){
        $resul = $valor1 + $valor2;
    }

    desafio($valor1, $valor2, $valor3, $valor4);
?>
    <a class="btn btn-info" href="index.php">Voltar</a>

</div>

</body>
<script src="js/jquery331.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>

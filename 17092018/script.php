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
    echo "<br>O valor de CAMPO 2 é: " . $_GET["campo2"];

    echo "<br>";
    echo "<br>";

    $retorno = array();

    function achaPares($num1, $num2){

        $j = 0;
        for($i=$num1; $i <= $num2; $i++){
            if ($i%2 === 0)
            {
                $retorno[$j] =  $i;
                $j++;
            }
        }
        return $retorno;
    }
    $retorno = achaPares($_GET["campo1"], $_GET["campo2"]);

    print_r($retorno);
?>

</div>

</body>
<script src="js/jquery331.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</html>

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

//    $a = 11;
//    $b = 77;

    function achaPares($num1, $num2){
        $retorno = array();
        $tamanho = $num2 - $num1;
        $par = $num1;

        for($i=0; $i < $tamanho; $i++){
            $j = 0;

            if ($par%2 === 0)
            {
                $retorno[$j] =  $par;
                $j++;
            }
            $par += 1;

        }

        print_r($retorno);

    }


    achaPares(11, 30);
?>


</div>

</body>
    <script src="js/jquery331.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
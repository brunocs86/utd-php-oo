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
        $array = array();
        $a = 11;
        $b = 77;

        function achaPares($num1, $num2){
            $retorno = array();
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
        $array = achaPares($a, $b);

        print_r($array);
    ?>

</div>

</body>
    <script src="js/jquery331.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
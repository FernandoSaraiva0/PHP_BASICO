<?php
    $titulo = "Operadores";
    $margin_top="mt-5";

    // Soma
    $a = 10;
    $b = 3.5;

    $soma = $a ** $b;

     // Sub
     $a = 10;
     $b = 3.5;
 
     $sub = $a * $b;

     $num1 = -80;
     $num2 = -$num1; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title><?= $titulo ?></title>
</head>
<body>
    <div class="container mt-5">
        <h1><?= $titulo ?> Aritimeticos</h1>
        <ul class=<?=$margin_top?>>
            <li>Adição(+)</li>
            <li>Subtração(-)</li>
            <li>Multiplicação(*)</li>
            <li>Divisão(/)</li>
            <li>Módulo ou resto da divisão(%)</li>
            <li>Exponencial(**)</li>
        </ul>
        <h2>Soma</h2>
        <h2 class="form-label"><?= $soma ?></h2> 
        <h2>Subtração</h2>
        <h2 class="form-label"><?= $sub ?></h2> 

        <h2>Varias OP</h2>
        <h2 class="form-label"><?= 50+20-80 * 28 / 8 ?></h2> 

        <h2>Inversão com -</h2>
        <h2 class="form-label"><?= $num2 ?></h2> 

    </div>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

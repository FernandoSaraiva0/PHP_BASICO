<?php
    // require_once 'while/while.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
        
        $i = 0;
        while($i<10){
    ?>
    <img src="<?= $titulo_produto ?>" alt="">    
    <h1><?php $produto ?></h1>
    <p>Desc. Produto</p>
    <h3>R$ 20,00</h3>
    <?php
        $i++;
        }
    ?>

</body>
</html>
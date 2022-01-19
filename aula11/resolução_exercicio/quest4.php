<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão3</title>
</head>
<body>
    <form>
        <label>Numero</label>
        <input type="number" name="num">
        <button type="submit">Enviar</button>
    </form>
    <?php   
        $num = $_GET['num'];

        if($num % 2 == 0):
    ?>
    <h2>O numero <?=$num ?> é Par</h2>
    <?php
        else: 
    ?>
    <h2>O numero <?=$num ?> é Impar</h2>
    <?php
        endif;
    ?>
</body>
</html>
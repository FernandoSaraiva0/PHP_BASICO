<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Ano de Nascimento:</label>
        <input type="number" name="ano">

        <label>Sexo:</label>
        <input type="text" name="sex">

        <button type="submit">Enviar</button>
    </form>

    <?php
        $nome = $_GET['nome'];
        $ano = $_GET['ano'];
        $sex = $_GET['sex'];
    ?>

    <h3>Nome: <?=$nome?></h3>
    <h3>Idade: <?php echo (2022-$ano) ?></h3>
    <h3>Sexo: <?= $sex ?></h3>
</body>
</html>
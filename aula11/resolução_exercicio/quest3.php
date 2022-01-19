<?php
   if(isset($_GET['num'], $_GET['op'])){
    $num = $_GET['num'] ;
    $op = $_GET['op'];

        for($i = 1; $i<=10; $i++){
            switch($op){
                case 'som':
                    echo $num." + ".$i." = ".($num+$i)."<br>";
                break;

                case 'sub':
                    echo $num." - ".$i." = ".($num-$i)."<br>";
                break;

                case 'mult':
                    echo $num." * ".$i." = ".($num*$i)."<br>";
                break;

                case 'div':
                    echo $num." / ".$i." = ".($num/$i)."<br>";
                break;

                case 'resto':
                    echo $num." % ".$i." = ".($num%$i)."<br>";
                break;
            }
        }
    }
?>
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
        <select name="op">
            <option value="som">Somar</option>
            <option value="sub">Subtrair</option>
            <option value="mult">Multiplicar</option>
            <option value="div">Dividir</option>
            <option value="resto">Resto</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
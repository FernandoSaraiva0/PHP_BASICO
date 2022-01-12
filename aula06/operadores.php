<?php
    $titulo = "Operadores";
    $margin_top="mt-5";

    //Constrantes no PHP
    define("QB", "<br>");

    // Diferênça entre igual e identico 
        $a=0; 
        $b=1;

        if(!$b){
            echo "Deu certo";
        } else {
            echo "Deu errado";
        }
    
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
        <h1><?= $titulo ?> Atribuição</h1>
        <ul class=<?=$margin_top?>>
            <li>Recebe(=)</li>
            <li>(+=) Soma um valor à variavel</li>
            <li>(-=) Subtrai um valor à variavel</li>
            <li>(/=) Divide a variavel por um valor determinado</li>
            <li>(/=) Multiplica a variavel por um valor determinado</li>
            <!-- Operadores de incremento e decremento -->
            <li>(++)</li>
            <li>(--)</li>

            <?php $a=2; $a*=6; echo $a?>
        </ul>
            <!-- Operadores Relacionais -->

            <h1><?= $titulo ?> Relacionais </h1>
        <ul class=<?=$margin_top?>>
            <li>Igual (==)</li>
            <li>Idêntico (===)</li>
            <li>(!= ou <>) Diferente</li>
            <li>(<) Menor que</li>
            <li>(>) Maior que</li>
            <li>(<=) Menor ou igual </li>
            <li>(>=) Maior ou igual</li>

        </ul>

           <!-- Operadores Lógicos -->

           <h1><?= $titulo ?> Lógicos </h1>
            <ul class=<?=$margin_top?>>
                <li>E (and) (&&) retona verdadeiro se a e b forem verdadeiros</li>
                <li>OU (or) (||) retona verdadeiro se a ou b forem verdadeiros</li>
                <li>NOT ou NÃO (!) retona verdadeiro se a for falsa</li>
            </ul>

            <!-- Operadores Bitwise  (bit a bit) -->

           <h1><?= $titulo ?> BitWise  (bit a bit)</h1>
           <!-- Os operadores bitwise: & , | , ^ comparam dois valores inteiros 
           utilizando suas representações binárias, 
           e retornam um novo valor. Cada bit será comparado e a formação 
           desse novo valor depende do operador que você usar. -->

            <ul class=<?=$margin_top?>>
                <li>E (&) Retorna 1 se ambos os bits comparados forem iguais a 1, caso contrário, retorna 0.</li>
                <li>OU (|) Retorna 1 se ambos os bits comparados forem iguais a 1, caso contrário, retorna 0.</li>
                <li>OU exclusivo (^) Retorna 1 se ambos os bits comparados forem diferentes, caso contrário, retorna 0.</li>

                <?= 9 ^ 7 ?>
            </ul>

    </div>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

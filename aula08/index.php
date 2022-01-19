<?php
    $lucas = 2;
    $v = 10;

    $ano_atual=date('Y'); //PEgando o ano atual
    // $ano_atual = 2022;

    $ano_nasc = 1998;

    $idade = $ano_atual - $ano_nasc;

    echo $idade;
 



    if($lucas != $v){
        echo "A variável é igual a ".$lucas."<br>";
    } else {
        echo "A variavel é diferente de ".$v."<br>";
    }

    for($i = 1; $i <= 10; $i++){
        echo $i."º Volta<br>";
    }

    // Operadores aritiméticos
    // Operadores de atribuição: = (atribui um valor)
    // Operadores lógicos !(negação), != (diferente)
    // 

    echo "Soma".$lucas + $v;
    echo "Subtração".$lucas - $v;

?>
<?php
    $a = 2;
    $b = 2;
    $c = 2;
    $d = 2;

    $ac = ($a+$c);
    $bd = ($b*$d);

    if($ac>$bd){
        echo "A {$a} + C {$c} é maior que B {$b} * D {$d}";
    } else if($ac<$bd){
        echo "A {$a} + C {$c} é menor que B {$b} * D {$d}";
    } else {
        echo "A {$a} + C {$c} é igual a B {$b} * D {$d}";
    }
?>
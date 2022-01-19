<?php
    $nomes = ["Lucas", "Adriano", "Junior", "Pedro"];

    foreach($nomes as $key => $nome){
        echo $key." ".$nome." ".PHP_EOL;
    }

    echo "<pre>";
    print_r($nomes);
    echo "</pre>";
<?php
    $titulo = "Operadores";
    $margin_top="mt-5";

    //Constrantes no PHP
    define("QB", "<br>");

    // if E else
        $a=3; 
        $b=3;

        if($a!=0){
            echo "Deu certo";
            if($a<2){
                echo $a.QB;
            } else {
                echo $b.QB;
                if($b>1){
                    echo "20".QB;
                }
            }
        } elseif($b==1) {
            echo "Deu errado";
        } else{
            echo "Elseif";
        }

        $salario = 1100;
        $tempo_serv = 12;
        $tem_reclamacoes = false;

        if($tempo_serv>=12){
            if($tem_reclamacoes != true){
                echo "Parabéns, você foi promovido!! <3".QB;
            } else {
                echo "Que pena, você foi demitido :/";
            }
        }

        if($salario>1000 && $tempo_serv>=12 && $tem_reclamacoes!=true){
            echo "Parabéns, você foi promovido!! <3".QB;
        }

        $w = 2;
        while($w >= 0):
            print $w.QB;
            $w--;
        endwhile;

        for($i = 12; $i>=0; $i--){
            echo "FOR1 ".$i.QB;
        }
        $s = 5;
        switch($s){
            case 1:
                echo "Switch ".$s.QB;
            break;
            case 2:
                echo "Switch ".$s.QB;
            break;
            case 3:
                echo "Switch ".$s.QB;
            break;
            case 4:
                echo "Switch ".$s.QB;
            break;
            case 5:
                echo "Switch ".$s.QB;
            break;
        }

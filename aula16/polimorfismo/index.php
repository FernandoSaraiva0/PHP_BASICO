<?php

class Eletrodomestico{
    public $nome;

    public function ligar($ligadoNaTomada){
        if($ligadoNaTomada == true){
            echo "ligando <br>";
        } else {
            echo "conecte à energia";
        }
    }
}

$eletro = new Eletrodomestico();
$eletro->ligar(true);

class Geladeira extends Eletrodomestico{
    public function ligar($ligadoNaTomada){
        echo $ligadoNaTomada."<br>";
    }
}

$gel = new Geladeira();
$gel->ligar(33);

class Tv extends Eletrodomestico{

    public function ligar($apertaBotao)
    {
        if($apertaBotao == true){
            echo "Ligando o aparelho <br>";
        } else {
            echo "Aperte o botão";
        }
    }
}

$tv = new Tv();
$tv->ligar(false);
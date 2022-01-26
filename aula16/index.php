<?php
#Encapsulamento 
    //utilizando a palavra chave implements e chamando a classe abstrata
class Tv implements Controlador{

    public function ligar()
    {
        echo "Ligado TV!";
    }

    public function desligar()
    {
        echo "Desligando TV";
    }

    public function aumentaVolume()
    {
        echo "Aumentando volume";
    }

    public function mudaCanal(){
        echo "Mudando de Canal";
    }
}

$tvsemp = new Tv();
$tvsemp->ligar();
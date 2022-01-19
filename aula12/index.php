<?php

#Definição de Classe
class Caneta{
    #definição de atributos
    public $cor;
    public $ponta;
    public $marca;
    public $nivel;

    #métodos em OO
    public function rabiscar(){
        echo "Rabiscando";
    }
}

#instaciando a classe Caneta;
$caneta = new Caneta();
$caneta->cor = "azul";
$caneta->ponta = "esferografica";
$caneta->marca = "BIC";
$caneta->nivel = "30%";
$caneta->rabiscar();

echo "<pre>";
print_r($caneta);
echo "</pre>";

$caneta2 = new Caneta();
$caneta2->cor = "vermelho";
$caneta2->ponta = "outra";
$caneta2->marca = "JOCAR";
$caneta2->nivel = "100%";
$caneta->rabiscar();

echo "<pre>";
print_r($caneta2);
echo "</pre>";
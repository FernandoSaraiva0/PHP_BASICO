<?php

class Pai{
    public $nome = "Joseph";
    public $sobrenome = "Andrade";
    protected $lingua = "Alemão";

    public function apresentar(){
        echo "Olá, sou o {$this->nome} {$this->sobrenome}, é um prazer conhece-lo, meu idioma nativo é o {$this->lingua}!";
        echo "<br>";
        echo "<br>";
    }
}

class Filho extends Pai {
    public $nome = "Junior";
}

class Sobrinho extends Pai {
    public $nome = "André";
}

class Prima extends Filho {
    public $nome = "Marcia";
}
$pai = new Pai();
$pai->apresentar();

$filho = new Filho();
$filho->apresentar();

$filho = new Sobrinho();
$filho->apresentar();

$filho = new Prima();
$filho->apresentar();
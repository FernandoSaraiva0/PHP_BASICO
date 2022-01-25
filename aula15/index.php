<?php
// Aula 15 - Métodos Mágicos, construtores e destrutores
    /* O que são: Os construtores e destrutores são metódos mágicos que executam 
    determinadas tarefas assim que a classe é instânciada e antes de ser removida da memória */

#Definição de Classe
class Caneta{
    #definição de atributos
    public $cor;
    public $ponta;
    public $marca;
    private $nivel;
    protected $tampada;

    #Método GET e SET
    public function getNivel(){
        $this->nivel;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

    public function getTampa(){
        $this->nivel;
    }

    public function setTampa($tampa){
        $this->tampada = $tampa;
    }

    #Método Construtor (parametros)
    public function __construct($cor, $ponta, $marca)
    {
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->marca = $marca;

    }

    public function __destruct()
    {
        echo "Caneta tampada novamente";
    }

    #métodos em OO

    public function rabiscar(){
        if(!$this->tampada){
            echo "Rabiscando";
        } else{
        echo "No puedo rabiscar";
        }
    
    }

    
}

#instaciando a classe Caneta;
$caneta = new Caneta("azul", "esferografica", "JOCAR");

// $caneta->nivel = "200%";

#atribuir valor a proriedade privada
    $caneta->setNivel("100%");
    $caneta->setTampa(true);

    echo "Olá método GET {$caneta->getTampa()} rrr";

echo "<br>";
echo "<pre>";
print_r($caneta);
echo "</pre>";

#O construtor tira a necessidade de atribuição para cada 
#atributo, podendo eu atribuir valores diretamente na instancia da classe.
echo "<br>";

$caneta->rabiscar();

echo "<br>";

echo $caneta->getNivel();

unset($caneta);

echo "<br>";
echo "<pre>";
print_r($caneta);
echo "</pre>";
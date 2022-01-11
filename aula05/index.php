<?php
    //Comentário em PHP
        #uma unica linha

        /* 
        Um comentário bem elaborado que mais parece um livro
        contando toda a história do meu código e todos os copos de café
        que tomei durante a codificação deste projeto que custou nada mais,
        nada menos do que a minha alma. kkkkk
        */

    // Variaveis
    $nome = "Fernando";
    $sobrenome = "Passos";
    $num1 = 1;
    $ligado = true;
    $valor = 3.49;
    $alunos = array('Carlos Filho', 'Carlos Junior', 'Adriano', 'Pedro', 'Lucas', 'Aimee', 20, true, 2.6, '#fffff', $nome);

    echo "<h1>COMANDOS DE IMPRESSÃO</h1>";

    // Comandos para impressão
    echo "<h1>ECHO</h1>";
    echo "É um comando que imprime uma variavel ou um conjunto de variáveis no console <br>";
    echo $nome;

    #Concatenação

    echo $nome.$sobrenome;

    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";

    echo"<h1>PRINT</h1>";
    print('Função que imprime uma string');

    echo"<br>";
    echo"<br>";

    echo"<h1>VAR_DUMP</h1>";

    var_dump($ligado);
    echo"<br>";
    var_dump($valor);
    echo"<br>";
    echo"<pre>";
    var_dump($alunos);
    echo"</pre>";

    echo"<h1>PRINT_R</h1>";

    print_r($ligado);
    echo"<br>";
    print_r($valor);
    echo"<br>";
    print_r($alunos);
    echo"<br>";
    echo"<br>";
    var_dump($alunos);
    echo"<pre>";
    print_r($alunos);
    echo"</pre>";



    // Variaveis
    echo "<h1>VARIÁVEIS</h1>";

    define('QB', "<br>");

    echo "Variáveis podem receber outras variaiveis como valor".QB;
    echo "Variáveis podem receber outras variaiveis como valor";
    $jose = $nome;
    echo"<br>";
    echo"<br>";
    echo"<br>";

    $a = 5;
    $b = &$a;
    $b = 10;

    echo $a;   echo"<br>"; echo $b;

    echo"<br>";
    echo"<br>";
    echo"<br>";

    // Tipos de Dados
    echo "<h1>TIPOS DE DADOS</h1>";
    // Boleano
    echo "<h2>Boleano</h2>";
    $exibir_nome = false;

    if($exibir_nome){
        echo "Zezinho da silva";
    }

    echo"<br>";
    echo"<br>";
    echo"<br>";

    $umidade = 91;

    $vai_chover = ($umidade > 98);

    if($vai_chover){
        echo "<h3>Levar guarda-chuva!</h3>";
    }

    // Considerado Falso em Booleano
    $i = 0;
    $v = 0.0;
    $b="";
    $b="0";
    $n=null;
    $a = array();

    if(!$v){
        echo "Boolean";
    }

    // Numerico
    echo "<h2>Numerico</h2>";
        // decimal, negativo, octal, hexadecimal, ponto flutuante, notacao cientifica
    $a = 1234;
    $b = -1234;
    $c = 0123;
    $d = 0x1a;
    $e = 0.1223465;
    $f = 4e23;
    // Ponto flutuante hexadecimal
    $g = 7E-10;
    $h = 1.2e3;

    //String
    echo "<h2>String</h2>";

    echo "Professor Fernando <3".QB;
    echo 'O melhor'.QB;

    $nome = "Fernando";
    $frase = "Tentar não. Faça. Tentativa não há. Mestre Yoda (Star Wars)";

    var_dump($nome);
    echo QB;
    echo QB;
    var_dump($frase);

    //Array
    echo "<h2>Array</h2>";
        #Um mapa ordenado por chaves, indices]

        /*
            array(
            chave  => valor,
            chave2 => valor2,
            chave3 => valor3,
        )
        */

        $v = array("Fernando", "00000000000", "+5500000000000", "05-07-2000", true);

        echo"<pre>";
        var_dump($v);
        echo"</pre>";
        
        echo"<pre>";
        print_r($v);
        echo"</pre>";

        echo"<hr>";

        $v = array(
            "nome"=>"Fernando", 
            "cpf"=>"00000000000", 
            "tel"=>"+5500000000000",
            "dn"=>"05-07-2000", 
            "active"=>true
        );

        echo"<pre>";
        var_dump($v);
        echo"</pre>";
        
        echo"<pre>";
        print_r($v);
        echo"</pre>";



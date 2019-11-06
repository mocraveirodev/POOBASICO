<?php
    // para poder usar as classes devemos chamar conforme abaixo
    include "Pessoas.php";
    include "Funcionarios.php";

    // Sintaxe de criação das instancias da classe
    $p1 = new Pessoas();
    $p2 = new Pessoas();

    $f1 = new Funcionarios();

    // Sintaxe de atribuição de atributos publicos
    $p1->nome = "Monica";
    $p1->email = "monica@email.com";
    $p2->nome = "Bee";
    $p2->email = "bee@email.com";

    $f1->nome = "Severino";
    $f1->email = "severino@email.com";
    $f1->matricula = 999999;

    // Para alterar os atributos devemos usar os SETTERS conforme abaixo
    $p1->setIdade(33);
    $p1->setCpf(33333333333);
    $p2->setIdade(23);
    $p2->setCpf(22222222222);

    $f1->setIdade(43);
    $f1->setCpf(44444444444);

    // Para utilizar os GETTERS temos que por entre {}
    echo "<br> A $p1->nome tem {$p1->getIdade()} anos. Seu CPF é {$p1->getCpf()} e seu email é $p1->email<br><br>";
    echo "<br> A $p2->nome tem {$p2->getIdade()} anos. Seu CPF é {$p2->getCpf()} e seu email é $p2->email<br><br>";

    echo "<br> O funcionario $f1->nome tem {$f1->getIdade()} anos. Seu CPF é {$f1->getCpf()},seu email é $f1->email e sua matricula é $f1->matricula.<br><br>";

    // Sintaxe de chamada dos metodos
    $p1->falar();
    echo "<br>";
    $p2->falar();
    echo "<br>";

    $f1->falar();
    echo "<br>";
    $f1->trabalhar();
    echo "<br>";
    
    var_dump($p1);
    echo "<br>";
    var_dump($p2);
    echo "<br>";
    var_dump($f1);
?>
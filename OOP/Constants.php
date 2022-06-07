<?php

class Pessoa {
    const nome = "Roberto";

    public function exibirNome(){
        echo self::nome;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();

class Vitor extends Pessoa{
    const nome = "Vitor";

    public function exibirNome(){
        echo self::nome;
    }
}

$vitor = new Vitor();
$vitor->exibirNome();
/*
Ele vai mostrar Vitor, pois o self considera que
deve ser mostrado o da classe. Para mostrar o 
outro, deve colocar parent::
*/


?>
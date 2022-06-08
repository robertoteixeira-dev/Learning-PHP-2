<?php

 /*
    Combine types to buildup a more complex object
    1. making everything in one class
    2. inheritance 
    3. object composition 
 
OBJECT COMPOSITION 
    Is when one class has a pointer to another class
    Uma classe cria a instancia de outra classe dentro de si propria.
    Assim, se ela for destruida, a outra classe também será. 
 */


// __contruct(StripeGateway $gateway)

class Pessoa {
    public function atribuiNome($nome){
        return "O nome da pessoa é ".$nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    public function __construct($nome) {
        //A gente instancia a classe pessoa aqui dentro da classe Exibe
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Roberto");
$exibe->exibeNome();





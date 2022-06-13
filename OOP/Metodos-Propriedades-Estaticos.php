<?php


/*
MÉTODOS ESTÁTICOS
    São funções que podem ser acionadas pelo usuário
    sem precisar instanciar a classe, sem precisar criar
    um objeto.

    É necessário que a função seja PUBLICA

    Os métodos estáticos podem ser herdados pelas classes
    filhos 

PROPRIEDADES ESTÁTICAS
    É a mesma coisa que os métodos estáticos, podem ser 
    usadas sem precisar instanciar. Compartilha o mesmo
    valor em todas as instancias da classe
*/

class Teste{

    public function ola(){
        echo "Olá mundo!";
    }
}

//Para usar nossa função ola, seria necessario fazer um objeto
$teste = new Teste();
$teste->ola();

#AGORA USANDO STATIC
class StaticTeste{
    static $idade = 20; 

    public static function olaStatic(){
        echo "Olá mundo static!";
    }
    //Nos podemos usar essa função dentro de outra função
    public function teste(){
        self::ola();
    }
}

StaticTeste::olaStatic();
$teste = new StaticTeste();
$teste->teste();




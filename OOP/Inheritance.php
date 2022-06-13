<?php

/*
INHERITANCE
    It allows one object to to aquire or inherite
    the traits and behaviors of another object

    Using the extends keyword

    É um recurso que permite que classes compartilhem
    atributos e métodos afim de reaproveitar códigos
    ou comportamentos generalizados

*/

/*
class Automovel{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andando";
    }

    public function Parar(){
        echo "Parou";
    }
}

class Carro extends Automovel {
   

}

class Moto extends Automovel {
    
}

//Então, ao instanciar Carro ou Moto, eu posso acessar os artributos e métodos de Automovel
$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
var_dump($carro);
*/


class CoffeMaker {

    public function brew(){

        var_dump('Brewing the coffe');
    }
}

/*
    NOTE: We have an "is a" relationship here
        A specialcoffemaker is a coffemaker

*/

class SpecialCoffeMaker extends CoffeMaker {

    /*
        So now, to have the function brew, I
        use inheritance - extends
    */

    public function brewLatte(){

        var_dump('Brewing the latte');
    }
}

(new CoffeMaker())->brew();

(new SpecialCoffeMaker())->brewLatte();


// We can Override the method of the parent class








?>
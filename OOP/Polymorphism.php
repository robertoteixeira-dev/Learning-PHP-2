<?php

/*
    É reescrever um método herdado
        Nos podemos inclusive mudar o método
        ou passar outro método dentro de outro 
        método

*/

class Animal {
    public function Andar(){
        echo "O animal andou";
    }
}

class Cavalo extends Animal {



    public function Andar(){
        echo "O animal andou";
    }
}

$animal = new Animal();
$animal->Andar();

$cavalo = new Cavalo();






?>
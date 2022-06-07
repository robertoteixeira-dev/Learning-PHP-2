<?php

/*
    Definition of Class


class Project {

    //PROPERTIES - Caractaristics 

    public $title;

    public $description;

    //METHODS - Behavior
    public function Talk($user){

    }
}
*/
// OBJECTS - Insances of a Class


class Pessoa {
    //PROPERTIES 
    public $nome;
    public $idade;

    //METHODS
    public function Falar(/*$name, $idade*/){
        // echo "Hello";
        /*
            Para utilizar nossas propiedades 
            aqui dentro, precisamos utilizar
            o $this que significa este e passar
            a propiedade como argumento 
        */
       // $this->name = $name;
        //$this->idade = $idade;

        echo $this->nome." de ".$this->idade." anos, disse Oi";
    }
}

//INSTANCIAR A CLASSE - OBJECT
$roberto = new Pessoa();
    # Agora posso utilizar meu método/função 
//$roberto->Falar();
    # Para dar o nome:
$roberto->nome = "Roberto Teixeira";
$roberto->idade = 24;

//var_dump($roberto);
$roberto->Falar();








?>
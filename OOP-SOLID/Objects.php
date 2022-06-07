<?php

// OBJECTS - Insances of a Class

/*
    Definition of Class
*/

class Team {
    //PROPERTIES
    protected $name;

    //CONSTRUCTOR
    public function __construct($name){
        $this->name = $name;
    }


    public function name(){
        return $this->name;
    }

    public function members(){

    }

    public function addMembers(){
        $this->members[] = $name;
    }

    public function cancel(){

    }

    public function maneger(){

    }
}

$acme = new Team('Acme');

var_dump($acme);

//Adding the members into our new team
$acme->addMembers('John Doe');




?>
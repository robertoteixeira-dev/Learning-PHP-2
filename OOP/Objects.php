<?php

// OBJECTS - Insances of a Class

/*
    Definition of Class
*/

class Team {
    //PROPERTIES
    protected $name;
    protected $members = [];

    //CONSTRUCTOR
    public function __construct($name, $members = []){
        $this->name = $name;
        //The initial members
        #Doing this we could beggin with members
        $this->members = $members;
    }

    //STATIC CONSTRUCTOR
    /*
        Also known as class mathod
        It is global
        If you update your constructor, update your static constructor as well 
    
    public static function start($name, $members = [])
    {
        return new static($name, $members);
    }
    */
    //But I could also put to accept any parameter to avoid duplication
    // ... allows us to accept many parameters
    public static function start(... $params)
    {
        return new static(... $params);
    }

    //METHODS
    public function name(){
        return $this->name;
    }

    public function members(){
        return $this->members;
    }

    public function addMembers($name){
        $this->members[] = $name;
    }

    public function cancel(){

    }

    public function maneger(){

    }
}

//Creating an object/instance of a class
$acme = new Team('Acme');
//Putting , [ end the name of the initial members, we could start with members]);
//or 
$acme2 = Team::start('acme2');


var_dump($acme);

//Adding the members into our new team
$acme->addMembers('John Doe');
$acme->addMembers('Jane Doe');

var_dump($acme->members());

// STATIC CONSTRUCTOR 








?>
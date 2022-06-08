<?php

/*
    A value Object is an object that is define according to its value

    Exemplo: If we create a register function 
    the user could put the age as negative even
    we putting the integer

    Benefits of creating a value object:
        1. Avoids primitive obsession and readability
        2. Helps with consistency
        3. Immutable 

*/
class Age {
    //Its not good put this as public because the user could access the method directly
    private $age;

    public function __construct($age){
        // 1. We could create an conditional with invalidargumentexception
        if ($age < 0 || $age > 120) {
        throw new InvalidArgumentException('That makes no sense');
        }
        $this->age = $age;
    }
}


function register(string $name, /*int*/ Age $age){
    /* 
    1. We could create an conditional with invalidargumentexception
    if ($age < 0 || $age > 120) {
        throw new InvalidArgumentException('That makes no sense');
    }

    Or, we can create a Value Object, creating a class 
    */
}

// regiter('John', -35);
// regiter('John', new Age(24));

$age = new Age(24);
regiter('Roberto', $age);

/*
    # A MULTIBLE OBJECT
        It's an object whos internal state can be changed
*/














<?php

namespace Teixeira\Week2;

class Customer {
    protected $firstName;
    protected $lastName;
    protected $email;

    public function __construct(string $firstName, string $lastName, string $email){
        if ($firstName === "") {
            throw new \InvalidArgumentException('First name cannot be empty.');
        }
        
        if ($lastName === "") {
            throw new \InvalidArgumentException('Last name cannot be empty.');
        } 
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Email not accepted!", 1);
        }
        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getFistName(): string {
        return $this->firstName;
    }

    public function getLastName(): float {
        return $this->lastName;
    }
}

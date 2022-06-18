<?php

namespace Teixeira\Week2;
use \PDO;
require "Customer.php";

/*
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'challengedb';

//Set DSN
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);
*/

class Repository {
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=challengedb', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDB(){
        return $this->db;
    }


    public function getCustomer($id): Customer {
        $row =  $this->executeQuery("SELECT * FROM customers WHERE id =".$id)->fetch();
        return new Customer($row['first_name'], $row['last_name'], $row['email'], $row['id']);
    }

    /*public function insertCustomer(Customer $customer) {

        $this->executeQuery("INSERT INTO customers VALUES (".$customer->getID().",'Ricardo', 'Macedo', 'macedo@gmail.com')");
        
        return $this->db->lastInsertId();
    }*/

    public function getLastID(): int {
        return $this->db->lastInsertId();
    }

    public function executeQuery($sql) {
        return $this->db->query($sql);
    }

}

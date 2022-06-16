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

    public function getRecord() {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            if( (int)$id == $id && (int)$id > 0 ){
                $row =  $this->executeQuery("SELECT * FROM customers WHERE id =".$id)->fetchAll();
            }
            return json_encode($row);
        }
    }

    public function insertCustomer() {

        $this->executeQuery("INSERT INTO customers VALUES ('id','Ricardo', 'Macedo', 'macedo@gmail.com')");
        
        return $this->db->lastInsertId();
    }

    public function getName(){

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            if( (int)$id == $id && (int)$id > 0 ){
                $row =  $this->executeQuery("SELECT first_name, last_name FROM customers WHERE id=".$id)->fetchAll();
            }
            return json_encode($row);
        }
    }

    public function getEmail(){

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            if( (int)$id == $id && (int)$id > 0 ){
                $row =  $this->executeQuery("SELECT email FROM customers WHERE id=".$id)->fetchAll();
            }
            return json_encode($row);
        }
    }

    public function getID(){

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            if( (int)$id == $id && (int)$id > 0 ){
                $row =  $this->executeQuery("SELECT id FROM customers WHERE id=".$id)->fetchAll();
            }
            return json_encode($row);
        }
    }

    public function createRecord() {
        if ($_POST) {
            $first_name =  $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $email = $_REQUEST['email'];

            $stmt = $this->db->prepare("INSERT INTO customers  VALUES (id,'$first_name','$last_name','$email')");
            $stmt->execute();
            $id = $this->db->lastInsertId();
            header("Location: show-customer.php?id=".$id);
            die();
        }
    }

    public function executeQuery($sql) {
        return $this->db->query($sql);
    }

}

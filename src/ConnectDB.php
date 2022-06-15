<?php

namespace Teixeira\Week2;
use \PDO;

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

class ConnectDB {
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=challengedb', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // $this->db->query("SELECT * FROM customers");
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDB(){
        return $this->db;
    }

    /*
    public function executeQuery($sql) {
        $this->db->query($sql);
        return $this->db->lastInsertId();
    }
    */
    
    public function executeQuery($sql) {
        return $this->db->query($sql);
    }
    
}

/*$sql =  'SELECT name, color, calories FROM fruit ORDER BY name';
foreach  ($conn->query($sql) as $row) {
    print $row['name'] . "\t";
    print  $row['color'] . "\t";
    print $row['calories'] . "\n";
}*/

$pdo = new ConnectDB();
/*
foreach($pdo->executeQuery('select * from customers;') as $c){
    var_dump($c);
}
*/
/*
$this->db->query($sql);
        return $this->db->lastInsertId();

*/


<?php

include __DIR__ . '/vendor/autoload.php';
use Teixeira\Week2\{ConnectDB};


if (isset($_POST['id']) && $_POST['first_name'] !== '' && $_POST['last_name'] !== '' && $_POST['email'] !== '') {
    $id = $_POST['id'];
    echo "Operation: Insert","<br>";
    
    if( (int)$id == $id && (int)$id > 0 ){
        $username = "root";
        $password = "";
        $hostname = "localhost";
        
        // Database connection and select database
        $db = mysqli_connect($hostname, $username, $password)
        or die("Unable to connect to the database");  
        echo ""; 
    
        $selectdb = mysqli_select_db($db, "challengedb")  
        or die("Could not select the database");  
        var_dump($selectdb);

        $insert = "INSERT INTO customers(id, first_name, last_name, email) VALUES (".$_POST['id'].",'".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email']."');";
        if (mysqli_query($db, $insert)) {
            echo "Record added";
        } else {
            die('Error: ' . mysqli_error($con));
        }
    }
}






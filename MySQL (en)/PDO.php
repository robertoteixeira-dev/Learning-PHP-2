<?php

/*
WHAT IS PDO?
    PHP Data Objects (PHP Extension)
    Lean $ consistent way to access the database
    Works with multiple databases
    Data access layer
    Object Oriented

BENEFITS
    Multiple Databases
    Security/Prepared Statements
    Usability
    Reusability
    Excellent Error Handling

Main PDO Classes
    # PDO - Represents a connection between PHP & DB
    # PDOStatement - Represents a prepered statement and
    after executed an associated result
    # PDOException - Represents errors raised by PDO




    

//PDO QUERY
$stmt = $pdo->query('SELECT * FROM customers');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['first_name']. '\n\n';
}

while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo $row->first_name. '\n\n';
}


$pdo->setAttibute(PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_OBJ);


### PREPARED STATEMENTS (Prepare & Execute)

//UNSAFE
//$sql = "SELECT * FROM customers WHERE fist_name = '$first_name'";

//USER INPUT
//$first_name = 'Roberto';

//FETCH MULTIPLE POSTS
    #POSITIONAL PARAMS
    #Named Params

//GET ROW COUNT SELECT * FROM customers WHERE

*/












<?php

include __DIR__ . '/vendor/autoload.php';
use Teixeira\Week2\{Repository};

$newRecord = new Repository();
$newRecord->createRecord();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create-customer</title>
</head>
<body>
<h1>Register</h1>
    <form method="post" action="">
        <p>
            <label>First Name:</label>
            <input type="text" name="first_name" placeholder="Your first name"><br>
        </p>
        <p>
            <label>First Name:</label>
            <input type="text" name="last_name" placeholder="Your last name"><br>
        </p>
        <p>
            <label>First Name:</label>
            <input type="email" name="email" placeholder="Your email"><br>
        </p>
            <button type="submit">Send</button>
    </form>
</body>
</html>
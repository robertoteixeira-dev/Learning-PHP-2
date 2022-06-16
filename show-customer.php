<?php

include __DIR__ . '/vendor/autoload.php';
use Teixeira\Week2\{Repository};

$customer = new Repository();

$customer->getRecord();

//$customer->insertCustomer();

?>

| Field | Value                                |

|-------|--------------------------------------|

| id    | <?php echo $customer->getID(); ?>    |

| name  | <?php echo $customer->getName(); ?>  |

| email | <?php echo $customer->getEmail(); ?> |





<?php

        /*
        // Get id from URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;

// If id is number
    if( (int)$id == $id && (int)$id > 0 ){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        
        // Database connection and select database
        $db = mysqli_connect($hostname, $username, $password)
        or die("Unable to connect to the database");  
        echo ""; 
    
        $selectdb = mysqli_select_db($db, "challengedb")  
        or die("Could not select the database");  
        var_dump($selectdb);

        
    
        $select = "SELECT * FROM customers WHERE id=".$id;
    
        $query = mysqli_query($db, $select);
    
        $json_response = array();
    
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $row_array['id'] = $row['id'];
            $row_array['first_name'] = $row['first_name'];
            $row_array['last_name'] = $row['last_name'];
            $row_array['email'] = $row['email'];

            array_push($json_response,$row_array);  
        }
        echo json_encode($json_response); 
        mysqli_free_result($query);
    } else {
        echo "Record not found";
    }*/

    



### Construct a new customer object and display it on a table.
/*
$username = "root";
$password = "";
$hostname = "localhost";
        
// Database connection and select database
$db = mysqli_connect($hostname, $username, $password)
or die("Unable to connect to the database");  
echo ""; 
    
$selectdb = mysqli_select_db($db, "challengedb")  
or die("Could not select the database"); 

$insert = "INSERT INTO customers VALUES ('Joane', 'França', 'françajoane@gmail.com')";

*/

?>
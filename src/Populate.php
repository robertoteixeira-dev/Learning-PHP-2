<?php

$products = Array(
    0 => Array('id' => 1, 'type' => 'regular', 'title' => 'Iphone', 'description' => 'New iphone 13 pro max', 'unit_price' => 1500.00),
    1 => Array('id' => 2,'type' => 'digital', 'title' => 'PHP course', 'description' => 'Learn PHP 8', 'unit_price' => 100.00),
    2 => Array('id' => 3,'type' => 'digital', 'title' => 'JavaScript Course', 'description' => 'Learn JavaScript with +10 projects', 'unit_price' => 75.00),
    3 => Array('id' => 4,'type' => 'digital', 'title' => 'Vocal training', 'description' => 'Learn how to sing as a pro', 'unit_price' => 50.00),
    4 => Array('id' => 5,'type' => 'regular', 'title' => 'Xiaomi', 'description' => 'Xiaomi note 9', 'unit_price' => 700.00),
    5 => Array('id' => 6,'type' => 'regular', 'title' => 'Aple watch', 'description' => 'New Apple Watch', 'unit_price' => 500.00),
    6 => Array('id' => 7,'type' => 'digital', 'title' => 'OOP Ebook', 'description' => 'Learn OOP', 'unit_price' => 30.00),
    7 => Array('id' => 8,'type' => 'regular', 'title' => 'Camera', 'description' => 'New digital camera', 'unit_price' => 600.00),
    8 => Array('id' => 9,'type' => 'regular', 'title' => 'Sneakers', 'description' => 'Cool sneakers for sport', 'unit_price' => 400.00),
    9 => Array('id' => 10,'type' => 'digital', 'title' => 'MySQL master training', 'description' => 'Learn MySQL', 'unit_price' => 120.00),
    10 => Array('id' => 11,'type' => 'regular', 'title' => 'Apple Airpods', 'description' => 'New Apple AirPods', 'unit_price' => 300.00),
    11 => Array('id' => 12,'type' => 'regular', 'title' => 'Apple Pen', 'description' => 'Apple Pen for Ipod', 'unit_price' => 100.00),
    12 => Array('id' => 13,'type' => 'regular', 'title' => 'Notebook', 'description' => 'Cool notebook for study', 'unit_price' => 10.00),
    13 => Array('id' => 14,'type' => 'regular', 'title' => 'Printer', 'description' => 'The best Printer', 'unit_price' => 600.00),
    14 => Array('id' => 15,'type' => 'regular', 'title' => 'Air conditioner', 'description' => 'The best air conditioner', 'unit_price' => 800.00),
    15 => Array('id' => 16,'type' => 'regular', 'title' => 'Microwave', 'description' => 'New microwave', 'unit_price' => 400.00),
    16 => Array('id' => 17,'type' => 'regular', 'title' => 'Microphone', 'description' => 'Professional microphone', 'unit_price' => 100.00),
    17 => Array('id' => 18,'type' => 'regular', 'title' => 'Guitar', 'description' => 'Professional guitar', 'unit_price' => 200.00),
    18 => Array('id' => 19,'type' => 'digital', 'title' => 'Youtube master course', 'description' => 'Be a Youtuber', 'unit_price' => 150.00),
    19 => Array('id' => 20,'type' => 'digital', 'title' => 'Recipis Ebook', 'description' => 'Healthy Recipis', 'unit_price' => 40.00)
);

$customers = Array(
    0 => Array('id' => 1, 'first_name' => 'Roberto', 'last_name' => 'Teixeira', 'email' => 'roberto@gmail.com'),
    1 => Array('id' => 2,'first_name' => 'Ariane', 'last_name' => 'Naira', 'email' => 'arianenaira@gmail.com'),
    2 => Array('id' => 3,'first_name' => 'Jorge', 'last_name' => 'Bispo', 'email' => 'jorge_bispo@gmail.com'),
    3 => Array('id' => 4,'first_name' => 'Luana', 'last_name' => 'Oliveira', 'email' => 'luana.oliveira@gmail.com'),
    4 => Array('id' => 5,'first_name' => 'Marcos', 'last_name' => 'Torres', 'email' => 'torres@gmail.com')
);

$orders = Array();

for($i = 1; $i<=10; $i++){

    $customer = $customers[rand(0, count($customers) - 1)];

    $items = Array();
    $n = rand(1, 3);

    for($j=0; $j < $n; $j++){
       $item = $products[rand(0, count($products) - 1)];

        $pos = array_key_exists($item['title'], $items);

       if($pos){
         $items[$item['title']] = Array('item' => $item, 'amount' => $items[$item['title']]['amount'] + 1);
       } else {
        $items[$item['title']] = Array('item' => $item, 'amount' => 1);
       }

    }

    array_push($orders, Array('id' => $i, 'customer' => $customer, "items" => $items));
}

$insertProductsSQL = "";

foreach($products as $p){
    $sql = "INSERT INTO products(id, type, title, description, unit_price) VALUES (".$p['id'].",'".$p['type']."', '".$p['title']."', '".$p['description']."', ".$p['unit_price'].");";
    $insertProductsSQL = $insertProductsSQL . "\n" . $sql;
}

$insertCustomersSQL = "";

foreach($customers as $c){
    $sql = "INSERT INTO customers(id, first_name, last_name, email) VALUES (".$c['id'].",'".$c['first_name']."', '".$c['last_name']."', '".$c['email']."');";
    $insertCustomersSQL =  $insertCustomersSQL . "\n" .$sql;
}

$insertOrdersSQL = "";
$insertLineItemsSQL = "";

$id = 1;
$line_item_id = 1;

foreach($orders as $o){
    $items = $o['items'];
    $c = $o['customer'];
    $item_count = count($items);

    $subtotal = 0.0;
    $shipping = 0.0;
    $grand_total = 0.0;

    foreach($items as $k => $o){
       $item = $o['item'];
       $amount = $o['amount']; 
       $subtotal = $subtotal + $item['unit_price'] * $amount;
       $item_total = $amount * $item['unit_price'];

       if($item['type'] == 'regular'){
           $shipping = 3.99;
       }

        $sql = "INSERT INTO line_items(id, order_id, product_id, quantity, unit_price, item_total) VALUES (".$line_item_id.", ".$id.", ".$item['id'].", ".$amount.", ".$item['unit_price'].", ".$item_total.");";
        $insertLineItemsSQL = $insertLineItemsSQL . "\n" . $sql;

        $line_item_id += 1;
    }

    $total = $subtotal + $shipping;
    $taxes = $total * 0.10;
    $grand_total = $total + $taxes;

    $sql = "INSERT INTO orders(id, customer_id, item_count, sub_total, shipping, taxes, grand_total, placed_at) VALUES (".$id.",".$c['id'].", ".$item_count.", ".$subtotal.", ".$shipping.", ".$taxes.", ".$grand_total.", now());";
    $insertOrdersSQL = $insertOrdersSQL . "\n" . $sql;

    $id += 1;
}

/*printf("%s\n", $insertProductsSQL);
printf("%s\n", $insertCustomersSQL);
printf("%s\n", $insertOrdersSQL);
printf("%s\n", $insertLineItemsSQL);*/

$content = $insertCustomersSQL . "\n" . $insertProductsSQL . "\n" . $insertOrdersSQL . "\n" . $insertLineItemsSQL;

file_put_contents("dml.sql", $content);
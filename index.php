<?php

include __DIR__ . '/vendor/autoload.php';
use Teixeira\Week2\{RegularProduct, DigitalProduct, Customer, Order, Cashier};

$iphone = new RegularProduct("Iphone", "New Iphone 13", 500);

$training = new DigitalProduct("PHP Course", "Learn PHP 8", 100);

$customer = new Customer("Rangel", "Souza", "rangel@gmail.com");

$order = new Order($customer);

$order->addItem($iphone, 3);

$cashier = new Cashier();

$total = $cashier->getTotal($order);

echo "\n\n";

echo "your order total is: " . $total;



<?php

namespace Teixeira\Week2;

require_once 'Order.php';
require_once 'ConnectDB.php';

interface CashierInterface {
    public function getTotal(Order $order);
}

class Cashier implements CashierInterface {
    protected $order;
    protected $pdo;

    public function getTotal(Order $order): float {
        $this->order = $order;

        $items = $this->order->getItems();

        $total = 0.0;

        $hasRegular = false;

        foreach($items as $i){

            $product = $i['product'];

            if($product instanceof RegularProduct){
                $hasRegular = true;
            }

            $total = $total + $product->getUnitPrice() * $i['amount'];
        }

        if($hasRegular) $total = $total + 3.99;
        
        $total = $total + $total * 0.10;

        return $total;
        
    }

    public function orderID(ConnectDB $pdo) {
        $this->pdo = $pdo;
    }

    public function register(Order $order){
        $insertOrdersSQL = "";
        $id = 1;

        $order = "INSERT INTO orders(id, customer_id, item_count, sub_total, shipping, taxes, grand_total, placed_at) VALUES (".$id.",".$c['id'].", ".$item_count.", ".$subtotal.", ".$shipping.", ".$taxes.", ".$grand_total.", now());";
        $insertOrdersSQL = $insertOrdersSQL . "\n" . $sql;

        $id += 1;
        return $this->pdo->executeQuery($order);
    }



}








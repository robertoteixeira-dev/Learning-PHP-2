<?php

namespace Teixeira\Week2;

require_once 'Order.php';

interface CashierInterface {
    public function getTotal(Order $order);
}

class Cashier implements CashierInterface {
    protected $order;

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

        $total = $total + $total * 0.10;

        if($hasRegular) $total = $total + 3.99;

        return $total;
        
    }


}








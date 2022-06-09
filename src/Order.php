<?php
namespace Teixeira\Week2;

require_once 'Customer.php';
require_once 'Product.php';
require_once 'RegularProduct.php';
require_once 'DigitalProduct.php';

interface OrderInterface {
    public function addItem(Product $product, int $amount);
}

class Order implements OrderInterface {
    protected $customerInstance;
    protected $items = Array();
    
    public function __construct($customerInstance){
        $this->customerInstance = $customerInstance;
    }

    public function getCostumerInstance(){
        return $this->customerInstance;
    }

    public function getItems(): array{
        return $this->items;
    }

    public function addItem(Product $product, int $amount) {
        if ($amount <= 0) {
            throw new \InvalidArgumentException('The minimum quantitiy of products to add to the cart is 1.');
        }
    
        array_push($this->items, Array("product" => $product, "amount" => $amount));
    }

    public function getRegularProduct() {
        return $this->regularProduct;
    }

    public function getDigitalProduct() {
        return $this->digitalProduct;
    }

}


<?php

namespace Teixeira\Week2;
require_once 'Product.php';

class RegularProduct extends Product {
    protected $title;
    protected $description;
    protected $unitPrice;

    public function __construct(string $title, string $description, float $unitPrice){
        if ($unitPrice <= 0) {
            throw new \InvalidArgumentException('Invalid product price.');
        }
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setUnitPrice($unitPrice);
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setUnitPrice($unitPrice){
        if ($unitPrice <= 0) {
            throw new \InvalidArgumentException('Invalid product price.');
        }
        $this->unitPrice = $unitPrice;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getUnitPrice(): float {
        return $this->unitPrice;
    }
}

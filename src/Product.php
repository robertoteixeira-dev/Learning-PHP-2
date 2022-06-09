<?php
namespace Teixeira\Week2;

abstract class Product {
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

    abstract public function setTitle($title);

    abstract public function setDescription($description);

    abstract public function setUnitPrice($unitPrice);

    abstract public function getTitle();

    abstract public function getDescription();

    abstract public function getUnitPrice();
}






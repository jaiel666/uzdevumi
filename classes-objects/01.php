<?php

class Product
{
    private $name;
    private $price;
    private $amount;

    public function __construct($name, $startPrice, $amount)
    {
        $this->name = $name;
        $this->price = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct()
    {
        echo "{$this->name}, price {$this->price}, amount {$this->amount}\n";
    }

    public function changeQuantity($newQuantity)
    {
        if ($newQuantity >= 0) {
            $this->amount = $newQuantity;
        } else {
            echo "Invalid quantity\n";
        }
    }

    public function changePrice($newPrice)
    {
        if ($newPrice >= 0) {
            $this->price = $newPrice;
        } else {
            echo "Invalid price\n";
        }
    }
}

$product1 = new Product("Logitech mouse", 70.00, 14);
$product2 = new Product("iPhone 5s", 999.99, 3);
$product3 = new Product("Epson EB-U05", 440.46, 1);

$product1->printProduct();
$product2->printProduct();
$product3->printProduct();

echo "After changes\n";
$product1->changeQuantity(20);
$product1->changePrice(75.00);
$product1->printProduct();

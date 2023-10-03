<?php
class Product
{
    private $id, $name, $price;

    public function __construct($id, $name, $price)
    {

        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
    }


    function getFormattedPrice()
    {
        return '$' . number_format($this->price, 2);
    }


    function showDetails()
    {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}";
    }
}


$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

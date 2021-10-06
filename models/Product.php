<?php

class Product
{
    protected $name;
    protected $description;
    protected $price;
    protected $category;
    protected $shipping;

    public function __construct($name, $description, $category, $price, $shipping)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->shipping = $shipping;

    }

}

?>
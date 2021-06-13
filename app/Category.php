<?php
namespace App;
class Category
{
    public string $name;
    public int $quantity;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->quantity = $data['quantity'];
    }
}
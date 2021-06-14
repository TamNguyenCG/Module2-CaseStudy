<?php
namespace App;
class Category
{
    public string $name;
    public int $quantity;
    public int $id;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->quantity = $data['quantity'];
    }
}
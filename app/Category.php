<?php

namespace App;
class Category
{

    /**
     * @var mixed|string
     */

    public mixed $id;
    public static string $name;

    public function __construct($data)
    {
        $this->id = $data['id'];
        self::$name = $data['name'];
    }
}
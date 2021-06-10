<?php


namespace App;


class User
{
    public string $name ;
    public string $email ;
    public string $password;
    public int $phone;
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->phone = $data['phone'];
    }
}
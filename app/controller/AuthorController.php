<?php

namespace App\Controller;

use App\Model\AuthorDB;
use App\Model\DBConnection;


class AuthorController
{
    public AuthorDB $authorDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=bookstore", "root", "Cubi@2712");
        $this->authorDB = new AuthorDB($connection->connect());
    }

    public function index()
    {
        $authors = $this->authorDB->getAll();
        include_once "resource/views/author/author.php";
    }
}

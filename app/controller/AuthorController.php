<?php


namespace App\Controller;


use App\Author;
use App\Model\AuthorDB;

class AuthorController
{
public AuthorDB $authorDB;

public function __construct(){
    $this->authorDB = new AuthorDB();
}
public function authorList(){
    $authors= $this->authorDB->getAll();
    include_once "resource/views/author/author.php";

}

}
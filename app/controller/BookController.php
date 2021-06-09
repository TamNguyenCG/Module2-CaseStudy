<?php
namespace App\Controller;

use App\Model\BookDB;

class BookController
{
    public BookDB $bookDB;

    public function __construct()
    {
        $this->bookDB = new BookDB();
    }

    public function bookList()
    {
        $books = $this->bookDB->getAll();
        include_once "resource/views/book/list.php";
    }
}
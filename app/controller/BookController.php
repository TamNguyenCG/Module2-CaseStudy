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

    public function index()
    {
        $books = $this->bookDB->getAll();
        include "resource/views/book/list.php";
    }
}
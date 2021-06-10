<?php

namespace App\Controller;

use App\Book;
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

    public function uploadImg(): string
    {
        $target_dir = "image/";
        $target_file = $target_dir . basename(date("H:i - d:m:Y") . "-" . $_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        return $target_file;
    }

    public function bookObj(): Book
    {
        $name = $_POST['name'];
        $publish = $_POST['publish'];
        $republish = $_POST['republish'];
        $summary = $_POST['summary'];
        $publisher = $_POST['publisher'];
        $license = $_POST['license'];
        $sold = $_POST['sold'];
        $amount = $_POST['amount'];
        $image = $this->uploadImg();

        $data = [
            'name' => $name,
            'publish' => $publish,
            'republish' => $republish,
            'summary' => $summary,
            'publisher' => $publisher,
            'license' => $license,
            'sold' => $sold,
            'amount' => $amount,
            'image' => $image
        ];
        return new Book($data);
    }

    public function error(): array
    {
        $errors = [];
        $fields = ['name', 'publish', 'republish', 'summary', 'publisher', 'license', 'sold', 'amount'];

        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Must fill in blank spot';
            }
        }
        return $errors;
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "resource/views/book/add.php";
        } else {
            $errors = $this->error();
            if (empty($errors)) {
                $book = $this->bookObj();
                $this->bookDB->create($book);
                header("location: index.php?page=booklist");
            } else {
                include "resource/views/book/add.php";
            }
        }
    }
}
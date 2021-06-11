<?php

namespace App\Controller;

use App\Book;
use App\Model\BookDB;

class BookController extends Controller
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

    public function getBookDetail()
    {
        $id = $_REQUEST['id'];
        $books = $this->bookDB->getDetailByID($id);
        include_once "resource/views/book/detail.php";
    }

    public function uploadImage(): string
    {
        $target_dir = "public/image/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        return $target_file;
    }

    public function bookObj(): Book
    {
        $image = $this->uploadImage();
        $name = $_POST['name'];
        $publish = $_POST['publish'];
        $republish = $_POST['republish'];
        $ISBN = $_POST['ISBN'];
        $summary = $_POST['summary'];
        $publisher = $_POST['publisher'];
        $license = $_POST['license'];
        $sold = $_POST['sold'];
        $amount = $_POST['amount'];

        $data = [
            'image' => $image,
            'name' => $name,
            'publish' => $publish,
            'republish' => $republish,
            'ISBN' => $ISBN,
            'summary' => $summary,
            'publisher' => $publisher,
            'license' => $license,
            'sold' => $sold,
            'amount' => $amount
        ];
        return new Book($data);
    }

    public function error(): array
    {
        $errors = [];
        $fields = ['name', 'publish', 'republish', "ISBN", 'summary', 'publisher', 'license', 'sold', 'amount'];

        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Must fill in blank spot';
            }
        }
        return $errors;
    }

    public function bookAdd()
    {
        $this->checkPermission();
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "resource/views/book/add.php";
        } else {
            $errors = $this->error();
            if (empty($errors)) {
                $book = $this->bookObj();
                $this->bookDB->bookCreate($book);
                header("location: index.php?page=booklist");
            } else {
                include "resource/views/book/add.php";
            }
        }
    }

    public function bookDelete()
    {
        $this->checkPermission();
        $id = $_REQUEST['id'];
        $imgName = $this->bookDB->getImgNameById($id);
        if (file_exists($imgName['image'])) {
            unlink($imgName['image']);
        }
        $this->bookDB->del($id);
        header("location: index.php?page=booklist");
    }

    public function bookSearch()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST['search'];
            if (empty($text)) {
                $books = $this->bookDB->getAll();
            } else {
                $books = $this->bookDB->searchByName($text);
            }
            include "resource/views/book/list.php";
        }
    }

    public function bookEdit()
    {
        $this->checkPermission();
        $id = $_REQUEST['id'];
        $books = $this->bookDB->getDetailByID($id);

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "resource/views/book/edit.php";
        } else {
            $errors = $this->error();
            if (empty($errors)) {
                $book = $this->bookObj();
                $this->bookDB->edit($id,$book);
                header("location: index.php?page=booklist");
            } else {
                include "resource/views/book/edit.php";
            }
        }
    }

    public function bookRecommend()
    {
        $books = $this->bookDB->recommendBook();
        include_once "resource/views/book/recommend.php";
    }

    public function bestSelling()
    {
        $books = $this->bookDB->bestSellingBook();
        include_once "resource/views/book/bestSelling.php";
    }
}
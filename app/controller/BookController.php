<?php

namespace App\Controller;

use App\Book;
use App\Model\BookDB;
use App\Model\CategoryDB;

class BookController extends Controller
{
    public BookDB $bookDB;
    public CategoryDB $cateDB;

    public function __construct()
    {
        $this->bookDB = new BookDB();
        $this->cateDB = new CategoryDB();
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

    public function randNumberToString($length): string
    {
        $array = [];
        for($i = 0; $i < $length; $i++){
            $rand = rand(0,9);
            array_push($array,$rand);
        }
        return implode("",$array);
    }

    public function MXBNumber(): string
    {
        $length = 9;
        $string = $this->randNumberToString($length);
        return "MXB-$string";
    }

    public function newBookObj(): Book
    {
        $length = 12;
        $image = $this->uploadImage();
        $name = $_POST['name'];
        $publish = $_POST['publish'];
        $republish = $_POST['republish'];
        $ISBN = $this->randNumberToString($length);
        $summary = $_POST['summary'];
        $publisher = $_POST['publisher'];
        $license = $this->MXBNumber();
        $sold = $_POST['sold'];
        $amount = $_POST['amount'];
        $recommend = $_POST['recommend'];
        $selling = $_POST['selling'];
        $categoryId = $_POST['categoryId'];

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
            'amount' => $amount,
            'recommend' => $recommend,
            'selling' => $selling,
            'categoryId' => $categoryId
        ];
        return new Book($data);
    }

    public function editBookObj(): Book
    {
        $image = $this->uploadImage();
        $name = $_POST['name'];
        $publish = $_POST['publish'];
        $republish = $_POST['republish'];
        $ISBN = $this->newBookObj()->ISBN;
        $summary = $_POST['summary'];
        $publisher = $_POST['publisher'];
        $license = $this->newBookObj()->license;
        $sold = $_POST['sold'];
        $amount = $_POST['amount'];
        $recommend = $_POST['recommend'];
        $selling = $_POST['selling'];
        $categoryId = $_POST['categoryId'];

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
            'amount' => $amount,
            'recommend' => $recommend,
            'selling' => $selling,
            'categoryId' => $categoryId
        ];
        return new Book($data);
    }

    public function error(): array
    {
        $errors = [];
        $fields = ['name', 'publish', 'republish', 'summary', 'publisher', 'sold', 'amount', 'recommend', 'selling','categoryId'];

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
        $categories = $this->cateDB->getAllData();
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "resource/views/book/add.php";
        } else {
            $errors = $this->error();
            if (empty($errors)) {
                $book = $this->newBookObj();
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
        $categories = $this->cateDB->getAllData();
        $id = $_REQUEST['id'];
        $books = $this->bookDB->getDetailByID($id);

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "resource/views/book/edit.php";
        } else {
            $errors = $this->error();
            if (empty($errors)) {
                $book = $this->editBookObj();
                $this->bookDB->edit($id, $book);
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
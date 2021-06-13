<?php

namespace App\Controller;

use App\Category;
use App\Model\CategoryDB;

class CategoryController extends Controller
{
    public CategoryDB $cateDB;

    public function __construct()
    {
        $this->cateDB = new CategoryDB();
    }

    public function add()
    {
        $this->checkPermission();
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "resource/views/category/add.php";
        } else {
            $error = $this->error();
            if (empty($errors)) {
                $category = $this->getCateObject();
                $this->cateDB->add($category);
                header("location: index.php?page=default");
            } else {
                include "resource/views/category/add.php";
            }
        }
    }

    public function error(): array
    {
        $errors = [];
        $fields = ['name', 'quantity'];

        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Must fill in blank spot';
            }
        }
        return $errors;
    }

    public function getCateObject(): Category
    {
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $data = [
            'name' => $name,
            'quantity' => $quantity
        ];
        return $category = new Category($data);
    }


    public function cateDelete()
    {
        $this->checkPermission();
        $id = $_REQUEST['id'];
        $this->cateDB->delByID($id);
        header("location: index.php?page=default");
    }


    public function getCateDetail()
    {
        $id = $_REQUEST['id'];
        $category = $this->cateDB->getIdData($id);
        $books = $this->cateDB->getBookByCateID($id);
        include_once "resource/views/category/detail.php";
    }

    public function cateSearch()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST['search'];
            if (empty($text)) {
                echo "There's no such category's name";
            } else {
                $category = $this->cateDB->searchByName($text);
            }
            include "resource/views/category/detail.php";
        }
    }

    public function cateEdit()
    {
        $this->checkPermission();
        $id = $_REQUEST['id'];
        $category = $this->cateDB->getDetailByID($id);

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "resource/views/category/edit.php";
        } else {
            $errors = $this->error();
            if (empty($errors)) {
                $category = $this->getCateObject();
                $this->cateDB->editByID($id, $category);
                header("location: index.php?page=default");
            } else {
                include "resource/views/category/edit.php";
            }
        }
    }
}
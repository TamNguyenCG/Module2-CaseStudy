<?php

namespace App\Controller;
use App\Model\CategoryDB;

class CategoryController
{
    public CategoryDB $categoryDB;
    public function __construct()
    {
        $this->categoryDB = new CategoryDB();
    }

    public function getCategoriesInfo()
    {
        $id = $_REQUEST['action'];
        $categories = $this->categoryDB->getCategoryById($id);
        include_once "resource/views/category/romance.php";
    }
}
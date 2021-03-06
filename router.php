<?php

use App\Controller\AuthController;
use App\Controller\BookController;
use App\Controller\AuthorController;
use App\Controller\CategoryController;
use App\Controller\HomeController;

$controller = new BookController();
$authorController = new AuthorController();
$cateController = new CategoryController();
$page = $_REQUEST['page'] ?? null;
switch ($page) {
//Book Function
    case 'add':
        $controller->bookAdd();
        break;
    case "delete":
        $controller->bookDelete();
        break;
    case "edit":
        $controller->bookEdit();
        break;
    case 'search':
        $controller->bookSearch();
        break;
    case 'booklist':
        $controller->bookList();
        break;
    case 'detail':
        $controller->getBookDetail();
        break;
    case 'recommend':
        $controller->bookRecommend();
        break;
    case 'best_selling':
        $controller->bestSelling();
        break;
// Author Function
    case 'author':
        $authorController->authorList();
        break;
    case "addAuthor":
        $authorController->create();
        break;
    case "deleteAuthor":
        $authorController->deleteAuthor();
        break;
    case "editAuthor":
        $authorController->edit();
        break;
    case "searchAuthor":
        $authorController->searchAuthor();
        break;
//Category Function
    case "addCate" :
        $cateController->add();
        break;
    case "editCate":
        $cateController->cateEdit();
        break;
    case "deleteCate":
        $cateController->cateDelete();
        break;
    case "detailCate":
        $cateController->getCateDetail();
        break;
    case "searchCate":
        $cateController->cateSearch();
        break;
//User Function
    case 'register':
        $auth = new AuthController();
        $auth->getFormRegister();
        break;
    case 'logout':
        $auth = new AuthController();
        $auth->logout();
        break;
    default:
        $home = new HomeController();
        $home->showDashBoard();
}
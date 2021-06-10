<?php

use App\Controller\AuthController;
use App\Controller\BookController;
use App\Controller\AuthorController;
use App\Controller\HomeController;

$controller = new BookController();
$authorController = new AuthorController();
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
//User Function
    case 'register':
        $auth = new AuthController();
        $auth->getFormRegister();
        break;
    case 'logout':
        $auth = new AuthController();
        $auth->logout();
        break;
    case "searchAuthor":
        $authorController->searchAuthor();
        break;
    default:
        $home = new HomeController();
        $home->showDashBoard();
}
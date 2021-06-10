<?php

use App\Controller\AuthController;
use App\Controller\BookController;
use App\Controller\AuthorController;
use App\Controller\HomeController;

$controller = new BookController();
$authorController = new AuthorController();
$page = $_REQUEST['page'] ?? null;
switch ($page) {
    case 'booklist':
        $controller->bookList();
        break;
    case 'author':
        $authorController->authorList();
        break;
    case 'logout':
        $auth = new AuthController();
        $auth->logout();
        break;
    case 'add':
        $controller->add();
        break;
    case "delete":
        $controller->delete();
        break;
    case "deleteAuthor":
        $authorController->deleteAuthor();
        break;
    case "addAuthor":
        $authorController->create();
        break;
    default:
        $home = new HomeController();
        $home->showDashBoard();
}

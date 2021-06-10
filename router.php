<?php

use App\Controller\AuthController;
use App\Controller\BookController;
use App\Controller\HomeController;

$controller = new BookController();
$page = $_REQUEST['page'] ?? null;
switch ($page){
    case 'booklist':
        $controller->bookList();
        break;
    case 'logout':
        $auth = new AuthController();
        $auth->logout();
        break;
    case 'add':
        $controller->add();
        break;
    default:
        $home = new HomeController();
        $home->showDashBoard();
}

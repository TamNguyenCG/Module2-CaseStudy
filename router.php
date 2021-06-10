<?php

use App\Controller\AuthController;
use App\Controller\BookController;
use App\Controller\UserController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$controller = new BookController();
$page = $_REQUEST['page'] ?? null;
switch ($page){
    case 'booklist':
        $controller->bookList();
        break;
}

<?php

use App\Controller\BookController;
use App\Controller\AuthorController;

$controller = new BookController();
$authorController = new AuthorController();
$page = $_REQUEST['page'] ?? null;
switch ($page){
    case 'booklist':
        $controller->bookList();
        break;
    case 'author':
        $authorController->authorList();
        break;
    case 'add':
        $controller->add();
        break;
}

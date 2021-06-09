<?php

use App\Controller\BookController;

$controller = new BookController();
$page = $_REQUEST['page'] ?? null;
switch ($page){
    case 'list':
        $controller->bookList();
        break;
}
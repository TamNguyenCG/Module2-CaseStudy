
<?php
include_once "vendor/autoload.php";
use App\Controller\BookController;

$controller = new BookController();
$page = $_REQUEST['page'] ?? null;
switch ($page) {
    default:
        $controller->index();
        break;
}

<?php
namespace App\Controller;

use App\Service\UserService;

class UserController
{
    protected UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    function index() {

        $users = $this->userService->getAll();
        require_once "resource/views/user/user.php";
    }

    function delete($id) {
        $this->userService->deleteById($id);
        header('location: index.php?page=user&action=show-list');
    }

    function add() {
        $this->userService->add();
    }
}
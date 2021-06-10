<?php

namespace App\Service;


use App\Model\AuthModel;
use App\Model\UserDB;
use App\User;

class AuthService
{
    protected $authModel;
    protected $userDB;

    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->userDB = new UserDB();
    }

    function checkUserByEmailPassword($request): bool
    {
        $user = $this->authModel->findByEmailPassword($request);
        if ($user) {
            $_SESSION['userLogin'] = $user;
            header('location: ../../index.php?page=default');
        }
        return false;
    }

    function logout()
    {
        unset($_SESSION['userLogin']);
        header('Location: resource/pages/login.php');
    }

    function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $password = $_POST["password"];
            $data = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => $password
            ];
            $user = new User($data);
            $this->userDB->addUser($user);
        }

    }
}
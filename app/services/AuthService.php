<?php
namespace App\Service;


use App\Model\AuthDB;

class AuthService
{
    protected AuthDB $authModel;

    public function __construct()
    {
        $this->authModel = new AuthDB();
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

    function logout() {
        unset($_SESSION['userLogin']);
        header('Location: resource/pages/login.php');
    }
}
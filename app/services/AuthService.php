<?php
namespace App\Service;


use App\Model\AuthModel;

class AuthService
{
    protected $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
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
        header('location: resource/views/pages/login.php');
    }
}
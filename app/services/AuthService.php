<?php
namespace App\Service;


use App\Model\UserModel;

class AuthService
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function checkUserByEmailPassword($request): bool
    {
        $user = $this->userModel->findByEmailPassword($request);
        if ($user) {
            $_SESSION['userLogin'] = $user;
            header('location: ../../index');
        }
        return false;
    }

    function logout() {
        unset($_SESSION['userLogin']);
        header('location: resource/views/pages/login.php');
    }
}
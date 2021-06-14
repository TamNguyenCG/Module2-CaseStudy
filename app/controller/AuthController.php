<?php

namespace App\Controller;


use App\Service\AuthService;

class AuthController
{
    protected AuthService $authService;


    public function __construct()
    {
        $this->authService = new AuthService();
    }


    public function login(): bool
    {
        return $this->authService->checkUserByEmailPassword($_REQUEST);
    }

    public function logout()
    {
        $this->authService->logout();
    }

    public function getFormRegister()
    {
        header("Location: resource/pages/register.php");
    }

    public function register($request)
    {
       $this->authService->add($request);
    }
}
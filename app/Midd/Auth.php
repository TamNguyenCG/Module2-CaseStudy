<?php

namespace App\Midd;

class Auth
{
    public function __construct()
    {
    }

    function isLogin()
    {
        if (!isset($_SESSION['userLogin'])) {
            header('Location: resorce/views/pages/login.php');
        }
    }
}
<?php


namespace App\Controller;


class Controller
{
    function checkPermission()
    {
        if ($_SESSION['userLogin']['role'] != "admin"){
            echo "You dont have the right permission to access this!";
            die();
        }
    }
}
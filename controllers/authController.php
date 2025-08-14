<?php
require_once __DIR__ . "/../models/User_Model.php";

class AuthController
{
    public function register()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $success = $user->register($_POST['username'], $_POST['password'], $_POST['role']);
            if ($success) {
                header('Location: /household-inventory-system/index.php?action=login');
                exit;
            } else {
                $error = "Registration Failed";
            }
        }

        include __DIR__ . "/../views/Auth/register.php";
    }

    public function login()
    {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->login($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: views/dashboard/index.php');
                exit;
            } else {
                $error = "Invalid Credentials";
            }
        }

        include __DIR__ . "/../views/Auth/login.php";
    }

    public function logout()
    {
        session_destroy();
        exit;
    }
}

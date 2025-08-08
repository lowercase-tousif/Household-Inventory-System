<?php

require_once __DIR__ . "/../models/User_Model.php";

class AuthController
{
        public function register()
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $user = new User();
                $success = $user->register($_POST['username'], $_POST['password'], $_POST['role']);

                if($success)
                {
                    header('Location: /?action=login');
                    exit;
                }
                else
                {
                    echo "Registration Failed";
                }
            }
            include __DIR__ . "/../views/Auth/register.php";
        }


        public function login()
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $userModel = new User();
                $user = $userModel->login($_POST['username'], $_POST['password']);

                if($user)
                {
                    session_start();
                    $_SESSION['user'] = $user;
                    header('Location: /?action=dashboard');
                    exit;
                }
                else
                {
                    echo "Invalid Credentials";
                }
            }

            include __DIR__ . "/../views/Auth/login.php";
        }

        public function logout()
        {
            session_start();
            session_destroy();
            header('Location: /?action=login');
            exit;
        }
}
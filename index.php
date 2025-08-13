<?php
session_start();
require_once __DIR__ . "/controllers/AuthController.php";

$action = $_GET['action'] ?? 'login'; // default register

$auth = new AuthController();

switch ($action) {
    case 'register':
        $auth->register();
        break;
    case 'login':
        $auth->login();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'dashboard':
        if(isset($_SESSION['user'])) {
            include __DIR__ . "/views/dashboard.php";
        } else {
            header('Location: /household-inventory-system/index.php?action=login');
        }
        break;
    default:
        echo "Page not found";
        break;
}

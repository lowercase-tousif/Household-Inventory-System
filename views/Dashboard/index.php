<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /household-inventory-system/views/auth/login.php");
    exit;
}

// Logout handler
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: /household-inventory-system/views/auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Household Inventory</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 20px;
        }

        .logout-btn {
            background-color: #ff5252;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .container {
            padding: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin-top: 0;
            color: #333;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            line-height: 1.8;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>🏠 Household Inventory Dashboard</h1>
        <a class="logout-btn" href="?logout=true">Logout</a>
    </div>

    <div class="container">

        <div class="card">
            <h3>📦 Total Items</h3>
            <p>45</p>
        </div>

        <div class="card">
            <h3>🗂 Categories</h3>
            <ul>
                <li>Furniture (12)</li>
                <li>Electronics (18)</li>
                <li>Appliances (10)</li>
                <li>Others (5)</li>
            </ul>
        </div>

        <div class="card">
            <h3>🚪 Rooms</h3>
            <ul>
                <li>Living Room (14)</li>
                <li>Kitchen (9)</li>
                <li>Bedroom (16)</li>
                <li>Bathroom (6)</li>
            </ul>
        </div>

        <div class="card">
            <h3>🕒 Recent Items</h3>
            <ul>
                <li>Microwave - 2025-08-10</li>
                <li>Sofa Set - 2025-08-08</li>
                <li>LED TV - 2025-08-05</li>
                <li>Iron Box - 2025-08-02</li>
                <li>Dining Table - 2025-07-28</li>
            </ul>
        </div>

    </div>

</body>
</html>

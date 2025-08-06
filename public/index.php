<?php

require_once '../config/Database.php';
$db = new Database();
$conn = $db->getConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1>Welcome to the Household Inventory System</h1>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="../../public/css/register.css">
</head>
<body>
<form action="/household-inventory-system/index.php?action=login" method="POST">
    <h2>Login</h2>
    <?php if(!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <div class="input-group">
        <input type="text" name="username" placeholder="Enter Username" required>
    </div>
    <div class="input-group">
        <input type="password" name="password" placeholder="Enter Password" required>
    </div>
    <button type="submit">Login</button>
</form>
</body>
</html>

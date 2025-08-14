<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<link rel="stylesheet" href="/household-inventory-system/views/css/register.css">
</head>
<body>
<form action="/household-inventory-system/index.php?action=register" method="POST">
    <h2>Register</h2>
    <?php if(!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <div class="input-group">
        <input type="text" name="username" placeholder="Enter Username" required>
    </div>
    <div class="input-group">
        <input type="password" name="password" placeholder="Enter Password" required>
    </div>
    <div class="input-group">
        <select name="role" required>
            <option value="" disabled selected>Select Role</option>
            <option value="admin">Admin</option>
            <option value="family">Family Member</option>
            <option value="guest">Guest</option>
        </select>
    </div>

    <p>Already have an account? <a href="login.php">Login here</a></p>
    <button class="submit-btn" type="submit">Register</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/household-inventory-system/views/css/login.css">
</head>
<body>

  <div class="image-side"></div>

  <div class="form-side">
    <form action="/household-inventory-system/index.php?action=login" method="POST">
      <h2>Login</h2>
      <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
      <div class="input-group">
        <input type="text" name="username" placeholder="Enter Username" required>
      </div>
      <div class="input-group">
        <input type="password" name="password" placeholder="Enter Password" required>
      </div>
      <p>New to the application ? <a href="../Auth/register.php">register here</a></p>
      <input type="submit" value="Login">
    </form>
  </div>

</body>
</html>

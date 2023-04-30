<?php
session_start();
if(isset($_SESSION["userid"])){
    header("location:index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="login-form">
      <h1>Login Form</h1>
      <form action="Includes/login.inc.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" name="submit">Login</button>
        <p>Don't have an account? <a href="http://localhost/PHP/Pro-3/log_in_system/signup.php">Sign up</a></p>
      </form>
    </div>
  </body>
</html>
</body>
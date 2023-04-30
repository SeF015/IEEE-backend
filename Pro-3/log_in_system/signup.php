<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sign-up Form</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
  </head>
  <body>
    <div class="signup-form">
      <h1>Sign-up Form</h1>
      <form action="Includes/signup.inc.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name = "username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name = "email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name = "password" required>
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password"  name = "confirm-password" required>
        <button type="submit" name="submit">Sign up</button>
        </form>
      <p>Already have an account? <a href="http://localhost/PHP/Pro-3/log_in_system/login.php">Login</a></p>
    </div>
  </body>
</html>

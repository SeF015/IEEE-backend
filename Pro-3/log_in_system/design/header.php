<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>let's shop</title>
     <link rel="stylesheet" type="text/css" href="style/style.css">
     <link rel="icon" href="logo/lets-shopping-logo-design.jpg"> 
     <link rel="stylesheet" href="style/styles.app.css">
     <link rel="stylesheet" href="style/productHandling.css">
  </head>
  <body>
    <header>
      <nav>
        <div>
          <ul class = "menu-main">
            <li><a href="#"><img src="logo/lets-shopping-logo-design.jpg" alt="brand logo"></a></li>
            <li><a href="index.php"></a>HOME</li>
            <li><a href="app.php">PRODUCTS</a></li>
            <li><a href="#">CURRENT SALES</a></li>
            <li><a href="#">VIP</a></li>
          </ul>
        </div>
        <ul class = "menu-main">
        <?php
        if (isset($_SESSION["userid"])) {
          ?>
          <li><a href="#"><?php echo $_SESSION["username"]?></a></li>
          <img src="favicon_io/favicon-16x16.png">
          <li><a href="Includes/logout.inc.php" class = "header-login-a">LOGOUT</a></li>
          <?php
        }
        else {
          ?>
          <li><a href="#">SIGN UP</a></li>
          <li><a href="#" class = "header-login-a">LOGIN</a></li>
          <?php
        }
        ?>
        </ul>
      </nav>
    </header>
    
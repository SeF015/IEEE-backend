<?php

if (isset($_POST["submit"])) {
    //to hold the data comming throw post method
    $UsrName = $_POST["username"];
    $PassWord = $_POST["password"]; 
    

    //instansiate SignupControler class
    include "../classes/DBcontrol.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-controler.classes.php";
    $login = new loginControler($UsrName, $PassWord );

    //error handel
    $login->loginUser();

    //going back to the front page
    header("location: ../index.php?error=none");
}
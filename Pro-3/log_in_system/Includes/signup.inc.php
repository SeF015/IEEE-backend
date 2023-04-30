<?php

if (isset($_POST["submit"])) {
    //to hold the data comming throw post method
    $UsrName = $_POST["username"];
    $Email = $_POST["email"];
    $PassWord = $_POST["password"]; 
    $ConfirmPass = $_POST["confirm-password"];

    //instansiate SignupContr class
    include "../classes/DBcontrol.classes.php";
    include "../classes/signup1.classes.php";
    include "../classes/signup-controler.classes.php";
    $signup = new SignupControler($UsrName, $Email, $PassWord, $ConfirmPass );

    //error handel
    $signup->signupUser();

    //going back to the front page
    header("location: ../index.php?error=none");
}
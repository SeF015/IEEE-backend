<?php

class Dbconnecttion{
     protected function connect(){
        try {
            $username = "root";
            $password = "";
            $conn = new PDO('mysql:host=localhost;dbname=accounts', $username, $password);
            return $conn;
        } catch (PDOException $th) {
            print "Error!: " . $th->getMessage() . "<br>";
            die();
        }
     }
}
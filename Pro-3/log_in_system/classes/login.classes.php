<?php

class login extends Dbconnecttion {

    protected function getUser($username, $pwd){
        $stmt = $this->connect()->prepare('SELECT userpassword FROM users WHERE username = ? OR email = ?;');//Prepares a statement for execution and returns a statement object

        if (!$stmt->execute(array($username, $pwd))) {
            $stmt = NULL;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        
        if ($stmt->rowCount() == 0) {
            $stmt = NULL;
            header("location: ../index.php?error=User-Not-Found");
            exit();
        }
        
        $hashedPWD = $stmt->fetchAll(PDO::FETCH_ASSOC);    // Fetches the remaining rows from a result set
        $checkPWD = password_verify($pwd, $hashedPWD[0]["userpassword"]);    // to compare the password the user submited with the one in the database

        if ($checkPWD == false) {
            $stmt = NULL;
            header("location: ../index.php?error=Wrong-Password");
            exit();
        }
        elseif ($checkPWD == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND userpassword = ?;');//Prepares a statement for execution and returns a statement object

            if (!$stmt->execute(array($username, $username ,$pwd))) {
                $stmt = NULL;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = NULL;
                header("location: ../index.php?error=User-Not-Found");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["user_id"];
            $_SESSION["username"] = $user[0]["username"];
            $stmt = NULL;
        }
               
    }
}
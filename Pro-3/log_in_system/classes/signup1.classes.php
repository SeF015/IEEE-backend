<?php

class signup1 extends Dbconnecttion {

    protected function setUser($username, $email, $pwd){
        $stmt = $this->connect()->prepare('INSERT INTO users (username, email, userpassword) VALUES (?, ?, ?);');//Prepares a statement for execution and returns a statement object

        $hashpwd=password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($username, $email, $hashpwd))) {
            $stmt = NULL;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = NULL;

    }
    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username= ? OR email = ?;');

        if (!$stmt->execute(array($username, $email))) {
            $stmt = NULL;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $queryResult;
        if ($stmt->rowCount() > 0) {
            $queryResult = false;
        }
        else
        $queryResult = true;

        return $queryResult;
    }
}
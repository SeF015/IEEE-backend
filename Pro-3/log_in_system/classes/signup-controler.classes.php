<?php

class SignupControler extends signup1 {

    private $UserName;
    private $UserPassword;
    private $ConfirmPassword;
    private $UserEmail;

    public function __Construct( $username , $email, $password, $confirmpassword){

        $this->UserName = $username;
        $this->UserEmail = $email;
        $this->UserPassword = $password;
        $this->ConfirmPassword = $confirmpassword;
    }

    public function signupUser(){
        //throw empty input error
        if ($this->emptyInput() == false){
            header("location: ../login.php?error=empty_Input");
            exit();
        }
         //throw invalid name error
        if ($this->valdityOfUsrNam() == false){
            header("location: ../login.php?error=invalid_name");
            exit();
        }
         //throw invalid email error
        if ($this->valdityOfEmail() == false){
            header("location: ../login.php?error=invalid_email");
            exit();
        }
         //throw pwd doesn't match error
        if ($this->pwdMatch() == false){
            header("location: ../login.php?error=password does not match");
            exit();
        }
         //throw already taken error
        if ($this->usernameTakenCheck() == false){
            header("location: ../login.php?error=already taken");
            exit();
        }

        $this->setUser($this->UserName, $this->UserEmail, $this->UserPassword );
    }

    private function emptyInput(){
        $result;
        if (empty($this->UserName) || empty($this->UserEmail) || empty($this->UserPassword) || empty($this->ConfirmPassword) ) {
            $result = false;
        }
        else
        $result = true;

        return $result;
    }

    private function valdityOfUsrNam(){
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->UserName)) {
            $result = false;
        }
        else
        $result = true;

        return $result;
    }

    private function valdityOfEmail(){
        $result;
        if (!filter_var($this->UserEmail, FILTER_VALIDATE_EMAIL)) {
            $result =false;
        }
        else
        $result = true;

        return $result;
    }

    private function pwdMatch(){
        $result;
        if ($this->UserPassword !== $this->ConfirmPassword) {
            $result =false;
        }
        else
        $result = true;

        return $result;
    }

    private function usernameTakenCheck(){
        $result;
        if (!$this->checkUser($this->UserName, $this->UserEmail)) {
            $result = false;
        }
        else
        $result = true;

        return $result;
    }
}
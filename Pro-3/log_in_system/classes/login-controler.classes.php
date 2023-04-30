<?php

class loginControler extends login {

    private $UserName;
    private $UserPassword;

    public function __Construct( $username , $password){

        $this->UserName = $username;
        $this->UserPassword = $password;
    }

    public function loginUser(){
        //throw empty input error
        if ($this->emptyInput() == false){
            header("location: ../index.php?error=empty_Input");
            exit();
        }

        $this->getUser($this->UserName, $this->UserPassword);
    }

    private function emptyInput(){
        $result;
        if (empty($this->UserName) || empty($this->UserPassword) ) {
            $result = false;
        }
        else
        $result = true;

        return $result;
    }

    
}
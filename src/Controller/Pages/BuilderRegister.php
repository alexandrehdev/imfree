<?php
 namespace Imfree\Free\Controller\Pages;

class BuilderRegister{

    private $username;

    private $email;

    private $password;

    private $confirmPassword;


    function __construct(){
        $this->setUsername($_REQUEST['username']);
        $this->setEmail($_REQUEST['email']);
        $this->setPassword($_REQUEST['password']);
        $this->setConfirmPassword($_REQUEST['confirmPassword']);
    }


    public function getUsername() :string{
        return $this->username;
    }

    public function setUsername(string $username) :void{
        $this->username = $username;
    }


    public function getEmail() :string{
        return $this->email;
    }


    public function setEmail(string $email) :void{
        $this->email = $email;
    } 


    public function getPassword() :string{
        return $this->password;
    }


    public function setPassword(string $password){
        $this->password = $password;
    }


    public function getConfirmPassword() :string{
        return $this->confirmPassword;
    }


    public function setConfirmPassword(string $confirmPassword) :void{
        $this->confirmPassword = $confirmPassword;
    }    



}


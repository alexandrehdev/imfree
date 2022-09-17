<?php
namespace Imfree\Free\Controller\User;

use Imfree\Free\Model\User as UserModel;
use Imfree\Free\Controller\User\Register\Register;
use Imfree\Free\Controller\User\Login\Login;

class User{


    private $register = [];

    private $login = [];

    private UserModel $userModel;


    function __construct(){
       $this->setUserModel(new UserModel()); 
    } 


    public function getUserModel(){
        return $this->userModel;
    }

    public function setUserModel(UserModel $userModel){
        $this->userModel = $userModel;
    }


    
        
    public function processRequest(){
       $url = $_SERVER['REQUEST_URI'];

       switch($url){
           case "/checkin/register":
               $this->processRegister();
              break;

           case "/checkin/login";
               $this->processLogin();
              break;
       } 

    }


    public function getRegisterData() :array{
       $register = new Register;

       $this->register = [
          "user"  => $register->getUsername(),
          "email" => $register->getEmail(),
          "pwd"  => password_hash($register->getPassword(),PASSWORD_BCRYPT),
          "confirmPwd" => password_hash($register->getConfirmPassword(),PASSWORD_BCRYPT),
       ];

       return $this->register;
    }



    public function getLoginData() :array{
       $login = new Login;

       $this->login = [
           "email" => $login->getEmailLogin(),
           "password" => $login->getPasswordLogin()
       ];

       return $this->login;
    }


    public function processLogin(){
       $login = $this->getLoginData();
       $userModel = $this->getUserModel();
       $validated = $userModel->validate($login);

       return ($validated == true) ? header("Location: /feed") : null;
    }


    public function processRegister(){
       $register = $this->getRegisterData(); 
       $userModel = $this->getUserModel(); 
       $validated = $userModel->validate($register);

       return ($validated == false) ? $userModel->registerUser($register) : null;
    }

    

}

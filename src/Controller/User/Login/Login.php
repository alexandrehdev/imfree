<?php
namespace Imfree\Free\Controller\User\Login;

class Login{
    
    private $emailLogin;

    private $passwordLogin;

    
    function __construct(){
        
        $this->setEmailLogin($_REQUEST['emailLogin']);
        $this->setPasswordLogin($_REQUEST['passwordLogin']);

    }

    public function getEmailLogin() :string{

        return $this->emailLogin;

    }


    public function setEmailLogin(string $emailLogin) :void{

        $this->emailLogin = $emailLogin;

    }

    public function getPasswordLogin() :string{

        return $this->passwordLogin;
    }

    public function setPasswordLogin(string $passwordLogin) :void{

        $this->passwordLogin = $passwordLogin;

    }
    

}


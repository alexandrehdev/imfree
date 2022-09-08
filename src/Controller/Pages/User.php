<?php
namespace Imfree\Free\Controller\Pages;
use Imfree\Free\Model\User as UserModel;
use Imfree\Free\Utils\View;
use Imfree\Free\Controller\Pages\BuilderRegister;

class User{
    
    private $userData = [];
    
    public $keys = [
        "username",
        "email",
        "password",
        "confirmPassword"
    ];

    public function receiveData() :array{
        $builder = new BuilderRegister;

        $this->userData = [
            "username"  => $builder->getUsername(),
            "email"     => $builder->getEmail(),
            "password"  => $builder->getPassword(),
            "confirmPassword" => $builder->getConfirmPassword(),
        ];

        return $this->userData;
    }


    public function secureData(){
        /* hash password */ 
        /* send to database */ 
       $userData = $this->receiveData(); 

    }
    

}

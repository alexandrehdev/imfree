<?php
 namespace Imfree\Free\Controller\Pages;
 use Imfree\Free\Model\User;
 use Imfree\Free\Controller\Pages\BuilderRegister;
 use Imfree\Free\Controller\Pages\Home;

 class Service{

     public static function callUnloggedPage(){

        echo Home::getUnloggedHome();

     }

     public static function callLoggedPage(){

        echo Home::getLoggedHome();

     }

     public static function callCheckIn(){

        echo Home::getCheckIn();

     }

     public static function processedRegisterData(){
        $user = new User;
        $registerData = [];
        $builderRegister = new BuilderRegister;

        $registerData = [
            "userName"        => $builderRegister->getUsername(),
            "email"           => $builderRegister->getEmail(),
            "password"        => $builderRegister->getPassword(),
            "confirmPassword" => $builderRegister->getConfirmPassword()
        ];
        
        foreach($registerData as $key => $rgData){
           if(empty($rgData)){

              return "field {$key} s empty";

           }else{
               $user->registerUser($registerData);                           

               break;
           }     
        }
     }


 }





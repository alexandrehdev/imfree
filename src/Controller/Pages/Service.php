<?php
 namespace Imfree\Free\Controller\Pages;
 use Imfree\Free\Controller\Pages\User as UserController;
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

     public static function processData(){
         $user = new UserController();
         $user->secureData();
     }
    


 }





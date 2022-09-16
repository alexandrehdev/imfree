<?php
 namespace Imfree\Free\Controller\Pages;
 use Imfree\Free\Controller\Pages\User as UserController;
 use Imfree\Free\Controller\Pages\Home;

 class Service{

     public static function callUnloggedPage() :void{
        echo Home::getUnloggedHome();
     }

     public static function callLoggedPage() :void{
        echo Home::getLoggedHome();
     }

     public static function callCheckIn() :void{
        echo Home::getCheckIn();
     }

     public static function processData() :void{
        $user = new UserController();
        $user->registerUser();
     }
    


 }





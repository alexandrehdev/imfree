<?php
 namespace Imfree\Free\Controller\Pages;
 use Imfree\Free\Controller\Pages\Home;

 class Service{

     public static function callUnloggedPage(){
        echo Home::getUnloggedHome();
     }

     public static function callLoggedPage(){
        echo Home::getLoggedHome();
     }
 }

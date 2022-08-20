<?php
require_once "vendor/autoload.php";
use Imfree\Free\Controller\Pages\Service;
use Imfree\Free\Utils\Route; 

Route::redirect("/", function(){
    Service::callUnloggedPage();
});

Route::redirect("/register", function(){
  echo "Mostrar página para se registrar";
});

Route::redirect("/login", function(){
    Service::callLoggedPage();
});

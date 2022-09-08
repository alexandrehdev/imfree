<?php
require_once "vendor/autoload.php";
use Imfree\Free\Controller\Pages\Service;
use Imfree\Free\Utils\Route; 

Route::redirect("/", function(){
    Service::callUnloggedPage();
});

Route::redirect("/checkin", function(){
    Service::callCheckIn();
});

Route::redirect("/checkin/register", function(){
    Service::processData();
});                 


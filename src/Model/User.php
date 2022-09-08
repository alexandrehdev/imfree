<?php
 namespace Imfree\Free\Model;
 use Saphira\Connectdb\Common\Enviroment;
 use Saphira\Connectdb\Actions\DataActions;

class User{
    
    function __construct()
    {
      Enviroment::load(__DIR__);
    }

    public function registerUser(array $user){

       /* DataActions::insertValues("User", */
       /*      [ */
       /*      "name", */
       /*      "email", */
       /*      "password", */
       /*      "confirm_password"], */
       /*      [ */
       /*       $user["userName"], */
       /*       $user["email"], */
       /*       $user["password"], */
       /*       $user["confirmPassword"] */
       /*      ] */
       /* ); */

    }    
    


     
}

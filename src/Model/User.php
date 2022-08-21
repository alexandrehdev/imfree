<?php
 namespace Imfree\Free\Model;
 use Saphira\Connectdb\Common\Enviroment;
 use Saphira\Connectdb\Actions\DataActions;

class User{
    
    function __construct()
    {

      Enviroment::load(__DIR__);
      
    }

    public function registerUser(array $formValues){

        DataActions::insertValues("User",
            [
            "name",
            "email",
            "password",
            "confirm_password"],
            [
             $formValues["userName"],
             $formValues["email"],
             $formValues["password"],
             $formValues["confirmPassword"]
            ]
        );
    }    

    

     
}

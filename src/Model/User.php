<?php
 namespace Imfree\Free\Model;
 use Saphira\Connectdb\Actions\DataActions;

class User{

    public function registerUser(array $user, DataActions $dataActions){
        $dataActions->setTable('User');
        $dataActions->setColumns("name","email","password","confirm_password");
        $dataActions->setValues($user["user"],$user["email"],$user["pwd"],$user["confirmPwd"]);
        return $dataActions->insertValues();
    }    
    


     
}

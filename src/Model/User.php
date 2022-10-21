<?php
 namespace Imfree\Free\Model;
 use Saphira\Connectdb\Actions\DataActions;

class User{


     private DataActions $dataActions;


     function __construct(){
        $this->dataActions = new DataActions(__DIR__);
     }

    
    public function validate(array $user) {
        $dataActions = $this->dataActions;
        $dataActions->setTable("User");
        $dataActions->setColumns("email,password");
        $dataActions->setCondition("email = '" . $user["email"] ."'");
        return $dataActions->selectColsWhere();
    }



    public function registerUser(array $user) :string{
        $dataActions = $this->dataActions;

        $dataActions->setTable('User');
        $dataActions->setColumns("name","email","password","confirm_password");
        $dataActions->setValues($user["user"],$user["email"],$user["pwd"],$user["confirmPwd"]);
        $response = $dataActions->insertValues();
        
        return $response;
    }



}    
    


     

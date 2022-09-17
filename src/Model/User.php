<?php
 namespace Imfree\Free\Model;
 use Saphira\Connectdb\Actions\DataActions;

class User{


     private DataActions $dataActions;



     public function getDataActions(){
        return $this->dataActions;
     }

     public function setDataActions(DataActions $dataActions){
        $this->dataActions = $dataActions;
     }


     function __construct(){

        $this->setDataActions(new DataActions(__DIR__));

     }

    
    public function validate(array $user) :bool{
        $dataActions = $this->getDataActions();
        $dataActions->setTable("User");
        $dataActions->setColumns("email");
        $dataActions->setCondition("email = '" . $user["email"] ."'");
        $response = $dataActions->selectColsWhere();

        return (is_array($response)) ? true : false;
    }



    public function registerUser(array $user) :string{
        $dataActions = $this->getDataActions();

        $dataActions->setTable('User');
        $dataActions->setColumns("name","email","password","confirm_password");
        $dataActions->setValues($user["user"],$user["email"],$user["pwd"],$user["confirmPwd"]);
        $response = $dataActions->insertValues();
        
        return $response;
    }



    public function loginUser(array $user) :array | bool{
        $dataActions = $this->getDataActions();

        $dataActions->setTable('User');
        $dataActions->setColumns("email");
        $dataActions->setCondition("email = {$user['email']}");
        $response = $dataActions->selectBy();

        return $response;
    }



}    
    


     

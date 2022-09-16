<?php
 namespace Imfree\Free\Model;
 use Saphira\Connectdb\Actions\DataActions;

class User{


    /**
     * validateUser 
     * 
     * @param array $user 
     * @param DataActions $dataActions 
     * @access public
     * @return void
     */

    public function validateUser(array $user, DataActions $dataActions) :bool{
        $dataActions->setTable("User");
        $dataActions->setColumns("email");
        $dataActions->setCondition("email = '" . $user["email"] ."'");

        return $dataActions->selectColsWhere();
    }


    /**
     * processUser 
     * 
     * @param array $user 
     * @param DataActions $dataActions 
     * @access public
     * @return void
     */

    public function processUser(array $user, DataActions $dataActions) :string | bool{
        $response = $this->validateUser($user,$dataActions);

        if($response == false){
            $dataActions->setTable('User');
            $dataActions->setColumns("name","email","password","confirm_password");
            $dataActions->setValues($user["user"],$user["email"],$user["pwd"],$user["confirmPwd"]);

            return $dataActions->insertValues();

        }else{

            return "Account already exists";

        }
    }    
    


     
}

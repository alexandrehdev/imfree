<?php
namespace Imfree\Free\Controller\Pages;
use Imfree\Free\Model\User as UserModel;
use Imfree\Free\Controller\Pages\BuilderRegister;
use Saphira\Connectdb\Actions\DataActions;

class User{
    
    private $userData = [];

    private DataActions $dataActions;

    private UserModel $userModel;


    public function getDataActions() :object{
        return $this->dataActions;
    }

    public function setDataActions(DataActions $dataActions) :void{
        $this->dataActions = $dataActions;
    }

    public function getUserModel() :object{
        return $this->userModel;
    }

    public function setUserModel(UserModel $userModel) :void{
        $this->userModel = $userModel;
    }

    function __construct(){
        $this->setUserModel(new UserModel());
        $this->setDataActions(new DataActions(__DIR__));
    }
    

    public $keys = [
        "username",
        "email",
        "password",
        "confirmPassword"
    ];

    public function receiveData() :array{
        $builder = new BuilderRegister;

        $this->userData = [
            "user"  => $builder->getUsername(),
            "email"     => $builder->getEmail(),
            "pwd"  => password_hash($builder->getPassword(), PASSWORD_BCRYPT),
            "confirmPwd" => password_hash($builder->getConfirmPassword(), PASSWORD_BCRYPT),
        ];

        return $this->userData;
    }


    public function secureData(){
       $userModel = $this->getUserModel();
       $userData = $this->receiveData(); 
       $dataActions = $this->getDataActions();
       $dataActions->setTable("User");
       $dataActions->setColumns("email");
       $dataActions->setCondition("email = '" . $userData["email"] ."'");
       $response = $dataActions->selectColsWhere();
       $existAccount = count($response);

       if($existAccount == 0){
         $userModel->registerUser($userData,$dataActions);
       }else{
           echo "Conta já existe";
       }
       

    }
    

}

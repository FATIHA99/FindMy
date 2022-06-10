<?php
namespace app\models;
use app\core\Model;
use app\core\models;
use app\core\Application;
use app\core\DbModel;


class LoginForm extends Model
{
    public string $username='';
    public string $user_password='';

    public function rules() :array
    {  
        return
         [
            'username' =>[self::RULE_REQUIRED],
            'user_password'=>[self::RULE_REQUIRED]
         ];

    }
    

    public function login()
    {  $user=  new User();
         $fatiha = $user ->findOne(['username'=> $this -> username]);
         if(!$fatiha)
         {
             $this->Error('username', 'user not exist ');
         }
         if($this->user_password  !== $fatiha->user_password)
         {
             $this -> Error('password' ,'Pasword is incorresct');
             return false;
         }
        
        //   return  Application::$app->login($user);
          $_SESSION['user']=$fatiha->username;
          $_SESSION['id']=$fatiha->id;
          return true ;
    }

}

?>
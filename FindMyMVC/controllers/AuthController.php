<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller
{
// ! login 
    public function login(Request $request )
    { 
        
        $user=new User();
        $loginForm = new LoginForm();
        if($request -> isPost()){
            $loginForm-> loadData($request -> getBody());
            if($loginForm -> validate() && $loginForm -> login())
            { 
                $FindMyUser=$user ->findOne(['username'=>  $loginForm->username]);
                if($FindMyUser->fk_user_role===2)
                {
                    Application::$app->response->redirect('/statistique');
                    return ;
                }
                Application::$app->response->redirect('/home');

               return ;
            }
        }
        $this->setLayout('auth');
        return $this->render('login',['model'=> $loginForm]);
    }
//  ! register
    public function signup(Request $request)
    {
        $user=new User();
        if($request -> isPost())
        {
            $user -> loadData($request -> getBody());
            if($user->validate() && $user->save())
            {
                return $this ->render('login',['model'=> $user ]); 
            }
            return $this ->render('signup',['model'=> $user ]); 
        }
        $this -> setLayout('auth');
        return $this ->render('signup',['model'=> $user  ]); 
 }

}
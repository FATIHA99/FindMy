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
                //pour l'admin  
                if($FindMyUser->fk_user_role === 2)
                {
                    Application::$app->response->redirect('/statistique');
                    return;
                }
                //pour un utilisateur normal
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
                Application::$app->response->redirect('/login');
                // return $this ->render('login',['model'=> $user ]); 
            }
      
            return $this ->render('signup',['model'=> $user ]); 
        }
     
        return $this ->render('signup',['model'=> $user  ]); 
 }
//  ! logout 
public function logout()
{
    Application::$app->logout();
    Application::$app->response->redirect('/');

}

}
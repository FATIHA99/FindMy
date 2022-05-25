<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

class UserController extends Controller
{

    public function update(Request $request)
    {
        $user = new User();
        $params = [
            'model' => $user
        ];
        if ($request->isGet()){
            return $this->render('updateUser', $params);
        }
        if ($request->isPost()){
            $user = new User();
        }
        if($request->isPost())
        {
            $user->loadData($request->getBody());

            if ($user->updateUser()){
                Application::$app->session->sefFlash('success', 'Thanks for registreing');
                Application::$app->response->redirect('/');
            }

            return $this->render('updateUSer', [
                'model' => $user
            ]);
        }

        return $this->render('updateUSer', [
            'model' => $user
        ]);    
    }

    public function userList()
    {
        $user = new User();
        
        
        if ($user->selectAll()){
            $data = $user->dataList;
            return $this->render('userList', [
                'data' => $data
            ]);
        }
    }

    public function getUser()
    {
        $user = new User();
        if ($user->select()){
            return $this->render('user', [
                'model' =>  $user->dataList
            ]);
        }
    }

    public function delete()
    {
        $user = new User();
        $user->delete();
    }

    
}
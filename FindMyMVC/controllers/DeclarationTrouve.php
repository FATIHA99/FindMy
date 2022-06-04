<?php 
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\objetTrouve;

class DeclarationTrouve extends Controller
{
    // ! objets public
    public function addObjetTrouve(Request $request)
    {
        $objetTrouve = new objetTrouve();
        if ($request->isPost()) {
            $objetTrouve->loadData($request->getBody());
        
            if ($objetTrouve->insertObjetTrouve()) {
                Application::$app->response->redirect('/mesDeclarationsTrouve');
            }
            return $this->render('DeclarationTrouve', ['declaration' => $objetTrouve]);
        }
        return $this->render('DeclarationTrouve', ['declaration' => $objetTrouve]);
    }
}
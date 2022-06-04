<?php 
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\objetPerdu;

class DeclarationPerdu extends Controller
{

    // ! objets public
    public function addObjetPerdu(Request $request)
    {
        $objetPerdu = new objetPerdu();
        if ($request->isPost()) {
            $objetPerdu->loadData($request->getBody());
        
            if ($objetPerdu->insertObjetPerdu()) {
                Application::$app->response->redirect('/mesDeclarations');
            }
            return $this->render('DeclarationPerdu', ['declaration' => $objetPerdu]);
        }
        return $this->render('DeclarationPerdu', ['declaration' => $objetPerdu]);
    }
}
<?php 
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\objetPerdu;
use app\core\Application;
class mesDeclarations extends Controller
{
    
// ! affichage
    public function mesDeclarations(Request $request)
    {
        $id=intval( $_SESSION['id']);
        $objetsPerdu = new objetPerdu();
        if($request->isGet())
        {  
            return $this->render('mesDeclarations', ['mesDeclarations' => $objetsPerdu->select($id)]);
        }
    }
// ! delete 

    public function delete(Request $request)
    {
        $obj = new objetPerdu();
        $obj->loadData($request->getBody());
        if($request->isGet()) 
        {
 
            if ($obj->delete($obj->id)) 
            {
                Application::$app->response->redirect('mesDeclarations');
            }
        }
    }

   
}
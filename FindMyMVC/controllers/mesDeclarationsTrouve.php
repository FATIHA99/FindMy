<?php 
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\core\Application;
use app\models\objetTrouve;

class mesDeclarationsTrouve extends Controller
{
    
// ! affichage
    public function mesDeclarationsTrouve(Request $request)
    {
        
        if(isset( $_SESSION['id']))
        {
            $id=intval($_SESSION['id']); 
        } 
  

        $objetsTrouve = new objetTrouve();
        if($request->isGet())
        {  
            if(! isset( $_SESSION['login']))
            {
                 return $this -> render('landingPage');
            } 
            else{
                return $this->render('mesDeclarationsTrouve', ['mesDeclarationsTrouve' => $objetsTrouve->select($id)]);
            }
        }
    }
// ! delete 

    public function delete(Request $request)
    {
        $obj = new objetTrouve();
        $obj->loadData($request->getBody());
        if($request->isGet()) 
        {
 
            if ($obj->delete($obj->id)) 
            {
                Application::$app->response->redirect('mesDeclarationsTrouve');
            }
        }
    }

   
}
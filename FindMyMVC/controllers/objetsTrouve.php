<?php 
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\objetTrouve; 
class objetsTrouve extends Controller
{
    public function objetsTrouve(Request $request)
    {
        $objetsTrouve = new objetTrouve();
        if($request->isGet())
        {  
            $this -> setLayout('sidbar');
            return $this->render('objetsTrouve',['objetTrouve' => $objetsTrouve->selectAll()
            ]);
        }
    }

}
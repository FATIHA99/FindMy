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
            if(!isset( $_SESSION['login']))
            {
                 return $this -> render('landingPage');
            } 
            else{
                $this -> setLayout('sidbar');
                return $this->render('objetsTrouve', ['objetTrouve' => $objetsTrouve->selectAll()
            ]);
            }
        }
    //    
    if($request -> isPost() ) 
    {
        if($_POST['ville']=='Toutes le maroc')
        {   
            $this -> setLayout('sidbar');
            return $this->render('objetsTrouve', ['objetTrouve' => $objetsTrouve->selectAll()]);
        }
        $obj=$objetsTrouve ->search(['ville'=>$_POST['ville']]);
        $this -> setLayout('sidbar');
        return $this-> render('objetsTrouve',['objetTrouve'=>$obj]);
    }


    }

}
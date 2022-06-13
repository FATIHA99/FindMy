<?php 
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\objetPerdu;
use app\models\objetTrouve;

class statistique extends Controller
{
    // ! for the landing page
    public function statistique(Request $request)
    {   
         $objetPerdu = new  objetPerdu();
         $objetTrouve = new  objetTrouve();
        if($request ->isGet())
        {
            if(! isset( $_SESSION['login']))
            {
                 return $this -> render('landingPage');
            } 
            else{
                $this -> setLayout('sidbar');
                return $this->render('statistique', ['count'=> $objetPerdu->countRow(),'countT'=> $objetTrouve->countRow()]);
            }
        }
      
    }
   

}
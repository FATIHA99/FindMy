<?php 
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\objetPerdu;
class SiteController extends Controller
{
// ! for the landing page 
    public function landingPage()
    {
        return $this->render('landingPage');
    }
// ! objets  perdu public 
    public function home(Request $request)
    {
        $objetsPerdu = new objetPerdu();
        if($request->isGet())
        { 
           
            if(! isset( $_SESSION['login']))
            {
                 return $this -> render('landingPage');
            } 
            else{
                return $this->render('home', ['objets' => $objetsPerdu->selectAll()]);
            }
           
        }
    }
    public function Declaration()
    {
        if(! isset( $_SESSION['login']))
        {
             return $this -> render('landingPage');
        } 
        else
        {
                 return $this->render('declaration'); 
        }
  
    }

}
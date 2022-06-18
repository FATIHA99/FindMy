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
            if(!isset($_SESSION['login']))
            {
                return $this -> render('landingPage');
            } 
            else
            {
                return $this->render('home', ['objets' => $objetsPerdu->selectAll()]);
            }
        }

        if($request -> isPost())
        {
            if($_POST['ville']=='Toutes le maroc')
            {
                return $this->render('home', ['objets' => $objetsPerdu->selectAll()]);
            }
            $obj=$objetsPerdu ->search(['ville'=>$_POST['ville']]);
            return $this-> render('home',['objets'=>$obj]);
        }
      
    }

    // !declaration
    
    public function Declaration()
    {
        if(!isset( $_SESSION['login']))
        {
             return $this -> render('landingPage');
        } 
        else
        {
            return $this->render('declaration'); 
        }
  
    }

}
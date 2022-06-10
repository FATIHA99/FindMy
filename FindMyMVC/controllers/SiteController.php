<?php 
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\objetPerdu;
use app\models\messagess;



class SiteController extends Controller
{
// ! for the landing page 

    public function landingPage(Request $request)
    {
        $msg = new messagess();
        if ($request->isPost()) {
            $msg->loadData($request->getBody());
            if ($msg->addMsg()) {
                return $this->render('landingPage');
                Application::$app->response->redirect('/landingPage');
            }
            return $this->render('landingPage');
        }
        return $this->render('landingPage');
    }
// ! objets public 
    public function home(Request $request)
    {
        $objetsPerdu = new objetPerdu();
        if($request->isGet())
        {
            return $this->render('home', ['objets' => $objetsPerdu->selectAll()]);
        }
    }

   
    
    public function Declaration()
    {
        return $this->render('declaration');
    }

}
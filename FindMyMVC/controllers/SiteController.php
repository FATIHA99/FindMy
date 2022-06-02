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
// ! objets public 
    public function home(Request $request)
    {
        $objetsPerdu = new objetPerdu();
        if($request->isGet())
        {
            return $this->render('home', ['objets' => $objetsPerdu->selectAll()]);
        }
    }
// ! objets public 
    public function addObjetPerdu(Request $request)
    {
      $objetPerdu = new objetPerdu();
      if($request->isPost())
      {
        $objetPerdu->loadData($request->getBody());   
          if ($objetPerdu->insertObjetPerdu())
          {
              Application::$app->response->redirect('/mesDeclarations');
          }
          return $this->render('declaration', ['declaration' => $objetPerdu]);
      }
      return $this->render('declaration', ['declaration' => $objetPerdu]);  
  }
    

  
}
<?php 
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\objetTrouve;

class DeclarationTrouve extends Controller
{
    // ! objets public
    public function addObjetTrouve(Request $request)
    {
        $objetTrouve = new objetTrouve();
        if ($request->isPost()) {
            $objetTrouve->loadData($request->getBody());
        
            if ($objetTrouve->insertObjetTrouve()) {
                Application::$app->response->redirect('/mesDeclarationsTrouve');
            }
            return $this->render('DeclarationTrouve', ['declaration' => $objetTrouve]);
        }
        return $this->render('DeclarationTrouve', ['declaration' => $objetTrouve]);
    }


      // ! update 
      public function update(Request $request)
      {
          $objetTrouve = new objetTrouve();
     
          if($request->isGet())
          {
              $objetTrouve -> loadData($request -> getBody());
              $objetTrouve -> selectobjects($objetTrouve->id);
              $objetTrouve -> loadData($objetTrouve->dataList[0]);

              $currentImage = $objetTrouve->dataList[0]['image'];
              $_SESSION['current_img'] = $currentImage;
              $params=[ 'model' =>$objetTrouve ];

              return $this ->render('updateDecTrouve',$params);  
          }
         


          if($request->isPost())
          {
              $data = $request->getBody();
              // to stor the ancien image if the user don't update it 
              if(empty($data['image'])) 
              {
                  $data['image'] = $_SESSION['current_img'];
              }

              $objetTrouve->loadData($data);
              if ($objetTrouve->update($objetTrouve->id)){
                  Application::$app->response->redirect('mesDeclarationsTrouve');
              }
              return $this->render('updateDecTrouve', [ 'model' => $objetTrouve]);
          }
          return $this->render('updateDecTrouve', [ 'model' => $objetTrouve ]);
             
         
  
      
      }
}
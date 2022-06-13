<?php 
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\objetPerdu;

class DeclarationPerdu extends Controller
{

    // ! objets public
    public function addObjetPerdu(Request $request)
    {
       
            
        $objetPerdu = new objetPerdu();
        if ($request->isPost()) {
            $objetPerdu->loadData($request->getBody());
        
            if ($objetPerdu->insertObjetPerdu()) {
                Application::$app->response->redirect('/mesDeclarations');
            }
            return $this->render('DeclarationPerdu', ['declaration' => $objetPerdu]);
        }
        return $this->render('DeclarationPerdu', ['declaration' => $objetPerdu]);
    }
    // ! update 
    public function update(Request $request)
    {                                                                                                                                                                                                                                               
        $objetperdu = new objetPerdu();
        //  par get
        if($request->isGet())
        {
            
            $objetperdu -> loadData($request -> getBody());
            $objetperdu -> selectobjects($objetperdu->id);
            $objetperdu -> loadData($objetperdu->dataList[0]);

            $currentImage = $objetperdu->dataList[0]['image'];
            $_SESSION['current_img'] = $currentImage;
            $params=[
            'model' =>$objetperdu
            ];

            return $this ->render('updateDecPerdu',$params);  
        }
         //  par post 
        if($request->isPost())
        {
            $data = $request->getBody();
         
            if(empty($data['image'])) {
                $data['image'] = $_SESSION['current_img'];
            }
         
            $objetperdu->loadData($data);

            if ($objetperdu->update($objetperdu->id)){
                Application::$app->response->redirect('mesDeclarations');
            }
        
            return $this->render('updateDecPerdu', [
                'model' => $objetperdu
            ]);
        }
        return $this->render('updateDecPerdu', [
            'model' => $objetperdu
        ]);

    
    }

}
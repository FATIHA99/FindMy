<?php 
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\core\Application;
use app\models\messagess; 
class messages extends Controller
{
    public function messages(Request $request)
    {
        $msg = new messagess();
        if($request->isGet())
        {  
            if(! isset( $_SESSION['login']))
            {
                 return $this -> render('landingPage');
            } 
            else{
                $this -> setLayout('sidbar');
                return $this->render('messages', ['messages' => $msg->selectAll()
            ]);
            }
            
        }
    }

    public function addMsg(Request $request)
    {
        $msg = new messagess();
        if ($request->isPost()) {
            $msg->loadData($request->getBody());
            if ($msg->addMsg()) {
                // return $this->render('contactUs');
                echo
                Application::$app->response->redirect('/');
            }
            return $this->render('contactUs');
        }
        return $this->render('contactUs');
    }

}

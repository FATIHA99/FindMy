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
            $this -> setLayout('sidbar');
            return $this->render('messages',['messages' => $msg->selectAll()
            ]);
        }
    }

    public function addMsg(Request $request)
    {
        $msg = new messagess();
        if ($request->isPost()) {
            // echo "post ";
            // exit;
            $msg->loadData($request->getBody());
            if ($msg->addMsg()) {
                return $this->render('landingPage');
                Application::$app->response->redirect('/landingPage');
            }
            return $this->render('landingPage');
        }
        return $this->render('landingPage');
    }

}

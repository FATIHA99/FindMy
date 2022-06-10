<?php 
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
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

}

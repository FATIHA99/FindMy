<?php 
namespace app\controllers;
use app\core\Controller;
class statistique extends Controller
{
    // ! for the landing page
    public function statistique()
    {   
          $this -> setLayout('sidbar');
        return $this->render('statistique');
    }
}
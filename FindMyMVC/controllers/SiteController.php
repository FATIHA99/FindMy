<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function landingPage()
    {
        return $this->render('landingPage');
    }

  
}
<?php

namespace app\core;

use app\controllers\SiteController;

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
  // callback  [mesDeclarations::class, 'mesDeclarations']
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback; 
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {   
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false; //route[get][login] ==[messages::class, 'messages']
        //* Application::$app->controller = new SiteController();
        if ($callback === false) // not found 
        {
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }
       //  return la page sans controller  $app->router->post('/url',  '/view');
        if(is_string($callback)) 
        {
            return $this->renderView($callback);
        }
 
        if(is_array($callback))
        {
            Application::$app->controller = new $callback[0](); 
            $callback[0] = Application::$app->controller;
           
            // to instance controller 
         
        }
       
        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = [])  //  LOGIN
    {
         $layoutContent = $this->layoutContent(); // MAIN
        $viewContent = $this->renderOnlyView($view, $params); //LOGIN CODE 
        return str_replace('{{content}}', $viewContent, $layoutContent);

    }

   

    protected function layoutContent() 
    {
        $layout = Application::$app->controller->layout; // default main 
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params) 
    {
        foreach($params as $key => $value)
        {
            $$key = $value; //is key = name = $name = value 
        }
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
    
    // public function renderContent($viewContent) 
    // {
    //     $layoutContent = $this->layoutContent();
    //     return str_replace('{{content}}', $viewContent, $layoutContent);
    // include_once Application::$ROOT_DIR."/views/$view.php";
    // }
}
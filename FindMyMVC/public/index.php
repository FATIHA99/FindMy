<?php

use app\controllers\AuthController;
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\mesDeclarations;
use app\controllers\TeacherController;
use app\controllers\UserController;
use app\controllers\ClassController;
use app\controllers\ParentController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$config = [
    'userClass'=>\app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
    ];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [new SiteController(), 'landingPage']);
// !login
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
// !sign up

$app->router->get('/signup', [AuthController::class, 'signup']);
$app->router->post('/signup', [AuthController::class, 'signup']);

// !home

$app->router->get('/home', [SiteController::class, 'home']);
$app->router->post('/home', [SiteController::class, 'home']);

// ! ajouter declaration

$app->router->get('/declaration', [SiteController::class, 'addObjetPerdu']);
$app->router->post('/declaration', [SiteController::class, 'addObjetPerdu']);
// !  afficher Mes declaration

$app->router->get('/mesDeclarations', [mesDeclarations::class, 'mesDeclarations']);
$app->router->post('/mesDeclarations', [mesDeclarations::class, 'mesDeclarations']);
// ! supprimer 
 
$app->router->get('/deleteObjetPerdu', [new mesDeclarations(), 'delete']);
$app->router->post('/deleteObjetPerdu', [new mesDeclarations(), 'delete']);
$app->run();
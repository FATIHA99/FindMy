<?php
use app\controllers\AuthController;
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\mesDeclarations;
use app\controllers\DeclarationPerdu;
use app\controllers\DeclarationTrouve;
use app\controllers\mesDeclarationsTrouve;


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

// ! ajouter declaration Perdu

$app->router->get('/DeclarationPerdu', [DeclarationPerdu::class, 'addObjetPerdu']);
$app->router->post('/DeclarationPerdu', [DeclarationPerdu::class, 'addObjetPerdu']);
// ! ajouter declaration Trouve

$app->router->get('/DeclarationTrouve', [DeclarationTrouve::class, 'addObjetTrouve']);
$app->router->post('/DeclarationTrouve', [DeclarationTrouve::class, 'addObjetTrouve']);


$app->router->get('/declaration', [SiteController::class, 'Declaration']);
$app->router->post('/declaration', [SiteController::class, 'Declaration']);



// !  afficher Mes declaration perdu

$app->router->get('/mesDeclarations', [mesDeclarations::class, 'mesDeclarations']);
$app->router->post('/mesDeclarations', [mesDeclarations::class, 'mesDeclarations']);

// !  afficher Mes declaration perdu

$app->router->get('/mesDeclarationsTrouve', [mesDeclarationsTrouve::class, 'mesDeclarationsTrouve']);
$app->router->post('/mesDeclarationsTrouve', [mesDeclarationsTrouve::class, 'mesDeclarationsTrouve']);
// ! supprimer objet perdu 
 
$app->router->get('/deleteObjetPerdu', [new mesDeclarations(), 'delete']);
$app->router->post('/deleteObjetPerdu', [new mesDeclarations(), 'delete']);
// ! supprimer objet perdu 
 
$app->router->get('/deleteObjetTrouve', [new mesDeclarationsTrouve(), 'delete']);
$app->router->post('/deleteObjetTrouve', [new mesDeclarationsTrouve(), 'delete']);

$app->run();
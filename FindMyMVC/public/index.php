<?php
use app\controllers\AuthController;
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\mesDeclarations;
use app\controllers\DeclarationPerdu;
use app\controllers\DeclarationTrouve;
use app\controllers\mesDeclarationsTrouve;
use app\controllers\statistique;
use app\controllers\objetsTrouve;
use app\controllers\messages;
require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$config = [
    // 'userClass'=>\app\models\User::class,
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
// ! logout
$app->router->get('/logout', [AuthController::class, 'logout']);
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
// ! affichage de declaration 
$app->router->get('/declaration', [SiteController::class, 'Declaration']);
$app->router->post('/declaration', [SiteController::class, 'Declaration']);
// !  afficher Mes declaration perdu
$app->router->get('/mesDeclarations', [mesDeclarations::class, 'mesDeclarations']);
$app->router->post('/mesDeclarations', [mesDeclarations::class, 'mesDeclarations']);
// !  afficher Mes declaration perdu
$app->router->get('/mesDeclarationsTrouve', [mesDeclarationsTrouve::class, 'mesDeclarationsTrouve']);
$app->router->post('/mesDeclarationsTrouve', [mesDeclarationsTrouve::class, 'mesDeclarationsTrouve']);
// ! supprimer objet perdu 
$app->router->get('/deleteObjetPerdu', [new mesDeclarations(), 'delete']);//
$app->router->post('/deleteObjetPerdu', [new mesDeclarations(), 'delete']);
// ! supprimer objet Trouve 
$app->router->get('/deleteObjetTrouve', [new mesDeclarationsTrouve(), 'delete']);//
$app->router->post('/deleteObjetTrouve', [new mesDeclarationsTrouve(), 'delete']);
// !update objet perdu 
$app->router->get('/updateDecPerdu', [new DeclarationPerdu(), 'update']);
$app->router->post('/updateDecPerdu', [new DeclarationPerdu(), 'update']);
// !update objet Trouve 
$app->router->get('/updateDecTrouve', [new DeclarationTrouve(), 'update']);
$app->router->post('/updateDecTrouve', [new DeclarationTrouve(), 'update']);


// TODO ADMIN TASKS
// ! statistique 
$app->router->get('/statistique', [new statistique(), 'statistique']);
$app->router->post('/statistique', [new statistique(), 'statistique']);
// !objetsTrouve
$app->router->get('/objetsTrouve', [new objetsTrouve(), 'objetsTrouve']);
$app->router->post('/objetsTrouve', [new objetsTrouve(), 'objetsTrouve']);
// !messages 
$app->router->get('/messages', [messages::class, 'messages']);
$app->router->post('/messages', [messages::class, 'messages']);
// !contact 
$app->router->get('/contactUs', [messages::class, 'addMsg']);
$app->router->post('/contactUs', [messages::class, 'addMsg']);
$app->run();
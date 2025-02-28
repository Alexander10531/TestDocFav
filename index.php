<?php

require_once __DIR__ . '/config/doctrine.php';
require_once __DIR__ . '/vendor/autoload.php';

use App\Exceptions\ExceptionHandler;

set_exception_handler([ExceptionHandler::class, 'handleException']);
error_reporting(E_ALL);

ini_set("log_errors", 1);
ini_set("error_log", "php://stdout");
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);


use App\Controller\UserController;
use App\Repositories\UserRepository;

$repository = new UserRepository($entityManager);
$userController = new UserController($repository);

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if($method === 'POST'){
    
    if($uri === '/users'){
        $users = $userController->registerUser();
    }

}

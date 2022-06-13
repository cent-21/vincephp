<?php
session_start();
require 'vendor/autoload.php';

use App\Controllers\MainController;
use App\Router\Router;



$router = new Router($_GET['url']); 



$router->get('/',  [MainController::class, "index"]); 

$router->get('/',  "MainController@index"); 


$router->run();
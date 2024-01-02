<?php
require __DIR__ . "/../vendor/autoload.php";
use Framework\Router;
use Framework\Session;
require "../helpers.php";

Session::start();


//Initiate the router
$router = new Router();

// Get Routes
$routes = require basePath("routes.php");


// Get current uri and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



// Route the request
$router->route($uri);



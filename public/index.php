<?php

require "../helpers.php";
require basePath("Router.php");
require basePath("Database.php");


//Initiate the router
$router = new Router();

// Get Routes
$routes = require basePath("routes.php");


// Get current uri and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);






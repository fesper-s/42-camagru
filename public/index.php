<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/config.php';

require_once '../core/Router.php';

$router = new Router();

$routes = require_once '../config/routes.php';
$routes($router);

$router->dispatch();

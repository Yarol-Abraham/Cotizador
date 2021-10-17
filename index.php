<?php

require './includes/app.php';

use MVC\Router;
use Controllers\DashboardController;
use Controllers\ErrorController;

$router = new Router();

$router->get("/dashboard/index", [DashboardController::class, "dashboard"]);
$router->get("/error/inicio", [ErrorController::class, 'error']);
$router->routes();

<?php

require './includes/app.php';

use MVC\Router;
use Controllers\DashboardController;
use Controllers\CotizacionesController;
use Controllers\ErrorController;

$router = new Router();
//rutas
$router->get("/dashboard/index", [DashboardController::class, "index"]);
$router->get("/cotizaciones/index", [CotizacionesController::class, "index"]);
// pagina de error
$router->get("/error/inicio", [ErrorController::class, 'error']);
$router->routes();

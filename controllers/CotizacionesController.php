<?php

namespace Controllers;

use MVC\Router;

class CotizacionesController
{

    static public function index(Router $router)
    {
        $router->render("pages/cotizaciones", [
            "page" => "Cotizaciones",
            "active" => "Cotizaciones"
        ]);
    }
}

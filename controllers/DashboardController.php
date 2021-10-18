<?php

namespace Controllers;

use MVC\Router;

class DashboardController
{

    static public function dashboard(Router $router)
    {
        $resumen = [
            "cotizaciones" => [
                "nombre" => "cotizaciones",
                "total" => 0,
                "nuevas" => 0,
                "bg" => "success",
                "icon" => ""
            ],
            "productos" => [
                "nombre" => "productos",
                "total" => 0,
                "nuevas" => 0,
                "bg" => "primary"
            ],
            "fabricantes" => [
                "nombre" => "fabricantes",
                "total" => 0,
                "nuevas" => 0,
                "bg" => "info"
            ],
            "clientes" => [
                "nombre" => "clientes",
                "total" => 0,
                "nuevas" => 0,
                "bg" => "warning"
            ]
        ];

        $router->render("dashboard/dashboard", [
            "page" => "Dashboard",
            "active" => true,
            "resumen" => $resumen
        ]);
    }
}

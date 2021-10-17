<?php

namespace Controllers;

use MVC\Router;

class DashboardController
{

    static public function dashboard(Router $router)
    {
        $router->render("dashboard/dashboard", [
            "page" => "Dashboard"
        ]);
    }
}

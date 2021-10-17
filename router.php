<?php

namespace MVC;

use Controllers\ErrorController;

class Router
{

    public $getRoutes = [];
    public $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function routes()
    {
        //obtener la ruta acutal
        $currentRoute =  $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];
        //verificamos si es de tipo ruta antes de instanciar el método
        if ($method === "GET") $fn = $this->getRoutes[$currentRoute] ?? null;
        if ($method === "POST") $fn = $this->postRoutes[$currentRoute] ?? null;
        // mostramos un error si existe en el controlador
        if (!$fn) return call_user_func([ErrorController::class, 'error'], $this);
        //iniciamos el controlador
        call_user_func($fn, $this);
    }

    public function render($view, $data = [])
    {
        //obtenemos los datos del arreglo de data
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        // iniciamos almacenamiento en memoria
        ob_start();
        include __DIR__ . "/views/$view.php";
        // borramos almacenamiento anterior en memoria
        $content = ob_get_clean();
        include __DIR__ . "/views/layout/layout.php";
    }
}

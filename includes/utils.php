<?php


function verifcarSesion()
{
    session_start();
    if (!$_SESSION['login']) header('Location: /bienes_raices/index.php');
}

function debugear($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
};

// Escapa html de los campos de los formularios
function sanitizar($html): string
{
    $sanitize = htmlspecialchars($html);
    return $sanitize;
}

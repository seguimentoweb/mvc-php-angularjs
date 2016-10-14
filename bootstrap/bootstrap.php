<?php
require_once __DIR__ . '/../vendor/autoload.php';

$base  = dirname($_SERVER['PHP_SELF']);

// Update request when we have a subdirectory
if(ltrim($base, '/')){

    //$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$route = new FrameworkAULA\Route\Routing();

require_once __DIR__ . '/../app/routes.php';

$route->dispatch();
<?php
namespace app;

/*
|------------------------------------------------------------------
| Autoloader
|------------------------------------------------------------------
|
| The code using is as autoloader and register of this application.
|
*/

$uri = explode('/', $_SERVER[REQUEST_URI]);

$controllerName = $uri[1] ? ucfirst($uri[1]) : 'Base';
$action = $uri[2] ? $uri[2] : 'index';

$class = __NAMESPACE__ . '\Controllers\\' . $controllerName . 'Controller';

$controller = new $class;
$controller->{$action}();


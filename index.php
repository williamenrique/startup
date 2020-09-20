<?php
define('BASEPATH', true);
require 'system/config.system.php';
require 'system/core/autoload.php';
echo ROOT;
error_reporting(ERROR_REPORTING_LEVEL);

$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

if(!CoreHelper::validateController($controller))
//si controlador no existe asigna
$controller = 'ErrorPage';

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";
$controller = $controller . 'Controller';

if(!CoreHelper::validateMethodController($controller, $method))
$method = 'exec';

$controller = new $controller();
$controller->$method($param);
require FOOTER;
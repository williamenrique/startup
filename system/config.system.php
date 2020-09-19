<?php
defined('BASEPATH') or exit('No se permite acceso directo');
//////////////////////////////////////
// Valores de uri
/////////////////////////////////////
define('URI', $_SERVER['REQUEST_URI']);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);
//////////////////////////////////////
// Valores de rutas
/////////////////////////////////////
define('FOLDER_PATH', '/startup');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PATH_VIEWS', FOLDER_PATH . '/app/views/');
define('PATH_CONTROLLERS', 'app/controllers/');
define('PATH_MODEL', FOLDER_PATH. '/app/models/');
define('HELPER_PATH', 'system/helpers/');
define('LIBS_ROUTE', ROOT . FOLDER_PATH . '/system/libs/');
define('COMPONENTS', ROOT . FOLDER_PATH . '/src/components/');
define('HEAD', ROOT . FOLDER_PATH . '/src/include/head.php');
define('FOOTER', ROOT . FOLDER_PATH . '/src/include/footer.php');
define('CSS', ROOT . FOLDER_PATH . '/src/assets/css/');
define('JS', ROOT . FOLDER_PATH . '/src/assets/js/');
define('IMG', ROOT . FOLDER_PATH . '/src/assets/img/');
//////////////////////////////////////
// Valores de core
/////////////////////////////////////
define('CORE', 'system/core/');
define('DEFAULT_CONTROLLER', 'Home');
//////////////////////////////////////
// Valores de base de datos
////////////////////////////////////
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB_NAME', 'mvc');
//////////////////////////////////////
// Valores configuracion
/////////////////////////////////////
define('ERROR_REPORTING_LEVEL', 0);
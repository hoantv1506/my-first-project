<?php
use Flywheel\Loader;

define('ROOT_PATH', dirname(__FILE__));
define('GLOBAL_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'global');
define('GLOBAL_INCLUDE_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'global' . DIRECTORY_SEPARATOR . 'include');
define('GLOBAL_TEMPLATES_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'global' . DIRECTORY_SEPARATOR . 'templates');
define('LIBRARY_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'library');
define('RUNTIME_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'runtime');
define('PUBLIC_DIR', ROOT_PATH . DIRECTORY_SEPARATOR . 'www_html' . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'permissions.cfg.php';
require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

Loader::register();
Loader::setPathOfAlias('root', ROOT_PATH);
Loader::setPathOfAlias('global', GLOBAL_PATH);
Loader::addNamespace('model', ROOT_PATH);
Loader::addNamespace('Core', LIBRARY_PATH);
Loader::addNamespace('Global', LIBRARY_PATH);
//Loader::addNamespace('Mongodb', ROOT_PATH);
//Loader::addNamespace('Excel', LIBRARY_PATH);
//Loader::addNamespace('Comment', LIBRARY_PATH);
//global event processing
require_once ROOT_PATH . '/global_event.php';

Loader::import('global.include.*');

\Flywheel\Config\ConfigHandler::import('root.config');

set_error_handler(['Core\ErrorHandler', 'errorHandling']);
set_exception_handler(['Core\ErrorHandler', 'exceptionHandling']);
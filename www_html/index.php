<?php
use Flywheel\Base;
require __DIR__ .'/../bootstrap.php';
$globalCnf = require ROOT_PATH . '/config.cfg.php';
$config = Base::mergeArray( $globalCnf, require __DIR__ . '/../apps/Frontend/Config/main.cfg.php');

$env = Base::ENV_DEV;

if ($env == Base::ENV_DEV) {
    restore_error_handler();
    restore_exception_handler();
}

try {
    $app = Base::createWebApp($config, $env, true);
    $app->run();
} catch (\Exception $e) {
    if ($env == Base::ENV_DEV) {
        \Flywheel\Exception::printExceptionInfo($e);
    }else {
        \Core\ErrorHandler::printError($e->getCode());
    }
    \Core\ErrorHandler::exceptionHandling($e);
}
<?php
defined('APP_PATH') or define('APP_PATH', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
\Flywheel\Loader::addNamespace('Frontend', dirname(APP_PATH));

return array(
    'app_name' => 'Frontend',
    'app_path' => APP_PATH,
    'view_path' => APP_PATH . DIRECTORY_SEPARATOR . 'Template/',
    'import' => array(
        'app.Library.*',
        'app.Controller.*',
        'root.model.*'
    ),
    'namespace' => 'Frontend',
    'timezone' => 'Asia/Ho_Chi_Minh',
    'template' => 'First',
    'css_version' => '201603376',
    'js_version' => '20160426'
);
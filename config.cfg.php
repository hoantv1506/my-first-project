<?php
$redis_host = 'localhost';
$redis_port = '6379';
$auth = '';

//$redis_host = 'localhost';
//$redis_host = '127.0.0.1';

return [
    'offline' => [
        'frontend' => [
            'from' => '2015-05-14 22:00:00',
            'to' => '2015-05-15 03:00:00',
            'message' => 'vui lòng quay lại sau 03h ngày 15/05/2015.<br> Xin cảm ơn!'
        ],
    ],
    'csrf_protection' => true,
    'response_compress' => true,
    'js_version' => "",
    'css_version' => "",
    'i18n' => [
        'enable' => true,
        'default_fallback' => ['en'],
        'default_locale' => 'en-US',
        'resource' => [
            'vi-VN' => []
        ]
    ],

    'caching' => [
        '__enable__' => true,
        '__default__' => 'common',
        '__hash__' => '-1/RsLPeXI^X#54BtNGBm*MqX7=vn8>j6QHJGG~49AN',
        'common' => [
            'storage' => 'Apc',
            'group' => 'mixed'
        ],
    ],

    /*
     * Session
     */
    'session' => [
        'storage' => '\Flywheel\Session\Storage\File', '\Flywheel\Session\Storage\Redis',
        'handler_config' => [],
        'session_name' => 'UINGYWD',
        'lifetime' => 28800,
        'cookie_exception' => true,
        'cookie_basename' => 'IDEMSK__',
        'cookie_secret' => 'xsxC6xFHJAMpuWqM9TJRqPaa',
    ],

    /*
     * Security Session
     */
    'security_session' => [
        'storage' => '\Flywheel\Session\Storage\File',
        'handler_config' => [],
        'session_name' => 'HIUKHJGYYF',
        'lifetime' => 1440,
        'cookie_exception' => true,
        'cookie_basename' => 'PPOPIDJHF__',
        'cookie_secret' => '$ulcekRS7!PaJvjeHn!rTvalwqzeh6YZc',
    ],

    /*
     * Config database connection
     */
    'database' => [
        'default' => [
            'adapter' => 'mysqli', //sqlite, mysql, mssql, oracle or pgsql
            'dsn' => "mysql:host={$redis_host};dbname=test",  //
            'db_user' => 'root',  //root
            'db_pass' => '',    //you database password

            'cache_prepare' => true,
            'slaves' => [],
        ],

        '__default__' => 'default'
    ],

//    'mongodb' => [
//        'seudo' => [
//            'dsn' => 'mongodb://192.168.0.250/items_depot',
//            'db_name' => 'items_depot',
//            'query_safety' => 'w'
//        ],
//        '__default__' => 'seudo'
//    ],

    'logger' => [
        'debug' => 100,
        'level' => \Core\Logger::DEBUG,
        'path' => ROOT_PATH . '/runtime/log/',
        'mail' => [
            'master' => 'hoantv1506@gmail.com',
            'follow' => [
//                'hanv' => 'nguyenvietha@alimama.vn',
            ],
        ],
    ],

    'sfs' => [
        'service_url' => 'http://static.seudo.vn',
        'secret_key' => 'F2c8A5X2F2QqGVLyYuvytqfwQtj6DnjU',
    ],

    'mail' => [
        'host' => 'email-smtp.us-west-2.amazonaws.com',
        'port' => 465,
        'security' => 'ssl',
        'username' => 'AKIAJDNA6WMWLL5M6ABA',
        'password' => 'Akm+UOmtte14NvYEAkXPIgzoHLYot07P/BdoKueMEhlO',
        'default_sender' => [
            'mail' => 'hoantv1506@gmail.com',
            'first_name' => 'Trần',
            'last_name' => 'Hoàn'
        ]
    ],

    //'redis' => require_once __DIR__ .'/redis.cfg.php',
//    'redis' => require __DIR__ .DIRECTORY_SEPARATOR.'redis.cfg.php',

    'redis' => [
        '__default__' => 'default',

        //config key info
        'default' => array(
            'dsn' => "{$redis_host}:{$redis_port}/15",
            'option' => array(
                'timeout' => 30, //connection timeout
                'prefix' => ''
            ),
        ),
    ],

    'queue' => array(
        'email_error' => array(
            'adapter' => 'redis',
            'name' => 'email_error',
            'config' => array(
                'dsn' => "$redis_host:$redis_port/15",
                'auth' => $auth
            ),
        ),
    )

//    'queue' => require_once __DIR__ .'/queue.cfg.php'
];

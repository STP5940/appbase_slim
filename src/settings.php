<?php

    /*
    |--------------------------------------------------------------------------
    | Load file config evn
    |--------------------------------------------------------------------------
    */
    $dotenv = \Dotenv\Dotenv::create(__DIR__ . '/..');
    $dotenv->load();

    define('DB_DRIVER', getenv('DB_DRIVER', ''));
    define('DB_HOST', getenv('DB_HOST', 'localhost'));
    define('DB_PORT', getenv('DB_PORT'));
    define('DB_DATABASE', getenv('DB_DATABASE', 'forge'));
    define('DB_USERNAME', getenv('DB_USERNAME', 'forge'));
    define('DB_PASSWORD', getenv('DB_PASSWORD'));

    define('CONFIG_IMEZONE', getenv('CONFIG_IMEZONE', 'Asia/Bangkok'));
    date_default_timezone_set(CONFIG_IMEZONE);

    // echo date_default_timezone_get().' : '.date("Y-m-d H:i:s");

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../resources/views/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'Appbase_slim',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // jwt settings
        'jwt' => [
            'secret' => 'supersecretkeyyoushouldnotcommittogithub',
        ],

        // Database connection setting
        'db' => [
           'driver'    => DB_DRIVER,
           'host'      => DB_HOST,
           'port'      => DB_PORT,
           'database'  => DB_DATABASE,
           'username'  => DB_USERNAME,
           'password'  => DB_PASSWORD,
           'charset'   => 'utf8',
           'collation' => 'utf8_unicode_ci',
        ],
    ],
];

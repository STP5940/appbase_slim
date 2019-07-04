<?php
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

        // Database connection setting
        'db' => [
          'host'    => 'localhost',
          'dbname'  => 'app',
          'user'    => 'root',
          'pass'    => 'root'
        ],
    ],
];

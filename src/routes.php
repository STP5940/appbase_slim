<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Database\Capsule\Manager as DB;


return function (App $app) {
    $container = $app->getContainer();

    // index page
    $app->get('/', \App\Controllers\IndexController::class . ':Index');
    $app->get('/index', \App\Controllers\IndexController::class . ':Index');


    // Group UsersController
    $app->group('/users', function() use($app, $container){

        $app->get('/login', \App\Controllers\UsersController::class . ':index');

    });


    //******************************* ERROR PAGE *******************************//

    $app->get('/404', function(Request $request, Response $response, array $args) use($container){
          return $container->get('renderer')->render($response, 'Error/404.phtml');
     });

};

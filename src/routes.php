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



    $app->group('/api', function(\Slim\App $app) use($container) {

        $app->get('/user',function(Request $request, Response $response, array $args) use($container) {

            // Authorization
            $session = $container['session'];
            $Token = isset($session['Token']);
            if($Token){
                header("Content-Type: application/json; charset=utf-8");
                echo json_encode($session['Token']);
                exit(); //enhance Slim performance
            }

            return $response->withRedirect(getroute['login']);
            exit(); //enhance Slim performance

        });

        $app->get('/logout',function(Request $request, Response $response, array $args) use($container) {
            // Authorization
            $session = $container['session'];
            $session::destroy();
            return $response->withRedirect(getroute['login']);
            exit(); //enhance Slim performance
        });

    });

    // Group UsersController
    $app->group('/users', function() use($app, $container){

        $app->get('/login', \App\Controllers\UsersController::class . ':index')->setName('login');
        $app->post('/checklogin', \App\Controllers\UsersController::class . ':checklogin');

    });


    //******************************* ERROR PAGE *******************************//

    $app->get('/404', function(Request $request, Response $response, array $args) use($container){
          return view('Error.404');
     });


     setroute($container->router->getRoutes(), 'getroute');
};

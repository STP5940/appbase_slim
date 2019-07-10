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

    $app->get('/profile',function(Request $request, Response $response, array $args) use($container) {
      if($container->Auth->validateAuth()) {
            echo "Hello User login true";
      }

      return $response->withRedirect(getroute['login']);
    })->setName('profile');

    $app->group('/api', function(\Slim\App $app) use($container) {

        $app->get('/user',function(Request $request, Response $response, array $args) use($container) {
            // Authorization
            if($container->Auth->validateAuth()) {
                  $session = $container['session'];
                  $Token = isset($session['Token']);
                  if($Token){
                      header("Content-Type: application/json; charset=utf-8");
                      echo "Login Ok";
                      exit(); //enhance Slim performance
                  }

            }

            return $response->withRedirect(getroute['login']);
        });

        $app->get('/logout',function(Request $request, Response $response, array $args) use($container) {
            // Kill Sesstion
            $session = $container['session'];
            $session::destroy();
            return $response->withRedirect(getroute['login']);
        })->setName('logout');

    });

    // Group UsersController
    $app->group('/users', function() use($app, $container){
        $app->get('/login', \App\Controllers\UsersController::class . ':index')->setName('login');
        $app->post('/checklogin', \App\Controllers\UsersController::class . ':checklogin')->setName('checklogin');
    });


    //******************************* ERROR PAGE *******************************//

    $app->get('/404', function(Request $request, Response $response, array $args) use($container){
          return view('Error.404');
     });


     setroute($container->router->getRoutes(), 'getroute');
};

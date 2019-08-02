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
    $app->get('/login',function(Request $request, Response $response, array $args) use($container) {
      echo "<a href='index'>index</a><br/>";
      echo "<a href='users/login'>Users</a><br/>";
      echo "<a href='#'>Admin</a><br/>";
      echo "<a href='404'>Error404 page</a><br/>";
    });

    $app->get('/qr-code', \App\Controllers\QrcodeController::class . ':Index');
    $app->get('/libra', \App\Controllers\LibraController::class . ':Index');

   /**
    * Users Group UsersController
    */
    $app->group('/users', function() use($app, $container){

        $app->get('',function(Request $request, Response $response, array $args) use($container) {
          return $response->withRedirect(getroute['login']);
        });

        // Users Login Page
        $app->get('/login', \App\Controllers\UsersController::class . ':login')->setName('login');

        // User Check login
        $app->post('/checklogin', \App\Controllers\UsersController::class . ':checklogin')->setName('checklogin');

        // Index Page Users
        $app->get('/index', \App\Controllers\UsersController::class . ':index');

        // Profile Users
        $app->get('/profile',function(Request $request, Response $response, array $args) use($container) {
          if($container->Auth->validateAuth()) {
                echo "Hello User login true";
                exit(); //enhance Slim performance
          }
          return $response->withRedirect(getroute['login']);
        })->setName('profile');

        // Users logout page
        $app->get('/logout',function(Request $request, Response $response, array $args) use($container) {
            // Kill Sesstion
            $session = $container['session'];
            unset($session['csrf']);
            $session::destroy();
            return $response->withRedirect(getroute['login']);
        })->setName('logout');

    });

    /**
     * Users Group APIController
     */
    $app->group('/api', function(\Slim\App $app) use($container) {

    });

    //******************************* ERROR PAGE *******************************//

    $app->get('/404', function(Request $request, Response $response, array $args) use($container){
          return view('Error.404');
     });


     setroute($container->router->getRoutes(), 'getroute');
};

<?php

use Slim\App;
use Monolog\Logger;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    // Using Eloquent ORM
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    //pass the connection to global container (created in previous article)
    $container['db'] = function ($container) use ($capsule){
        return $capsule;
    };

    // Setting csrf token
    $container['csrf'] = function ($c) {
        $guard = new \Slim\Csrf\Guard();
        $guard->setFailureCallable(function ($request, $response, $next) {
            $request = $request->withAttribute("csrf_status", false);
            die('Appbase slime Check csrf Fail!<br/><a href="login">Goto login</a><br/>');
            return $next($request, $response);
        });
        return $guard;
    };

    // Register globally to app
    $container['session'] = function ($c) {
      $SessionHelper = new \SlimSession\Helper;
      $Session = new \Slim\Middleware\Session([
                  'name' => 'appbaseslim_session',
                  'autorefresh' => true,
                  'lifetime' => '24 minutes',
                  'autorefresh'  => true,
                ]);
      return $SessionHelper;
    };

    // Page not found
    $container['notFoundHandler'] = function ($c) {
        return function ($request, $response) use ($c) {
            $response = new \Slim\Http\Response(404);
            return $response->withRedirect('/404', 301);
            // return $response->write("Page not found");
        };
    };

    // Error 405
    $container['notAllowedHandler'] = function ($c) {
        return function ($request, $response, $methods) use ($c) {
            return $response->withStatus(405)
                ->withHeader('Allow', implode(', ', $methods))
                ->withHeader('Content-type', 'text/html')
                ->write('Method must be one of: ' . implode(', ', $methods).'<br/><a href="login">Goto login</a><br/>');
        };
    };

    // Error 500
    $container['errorHandler'] = function ($c) {
        return function ($request, $response, $exception) use ($c) {

            $settings = $c->get('settings')['logger'];
            $log = new \Monolog\Logger($settings['name']);
            $log->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
            // add records to the log
            $log->error($exception->getMessage(), ['exception' => $exception]);

            return $response->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('<h2>SERVER ERROR 500 !</h2>');
        };
    };

    $container['phpErrorHandler'] = function ($c) {
        return function ($request, $response, $error) use ($c) {

            $settings = $c->get('settings')['logger'];
            $log = new \Monolog\Logger($settings['name']);
            $log->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
            // add records to the log
            $log->error($error->getMessage(), ['exception' => $error]);

            // retrieve logger from $container here and log the error
            $response->getBody()->rewind();
            return $response->withStatus(500)
                            ->withHeader('Content-Type', 'text/html')
                            ->write("<h2>Oops, something's gone wrong!</h2>");
        };
    };

    // Authorization
    $container['Auth'] = function ($c) {
      $session = $c['session'];
      $Auth = new \App\controllers\Auth([
                    'Token'        => $session['Token'],
                    'username'     => 'root'
                ]);
      return $Auth;
    };

    $app->add($container['Auth']);
};

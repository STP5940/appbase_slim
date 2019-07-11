<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // e.g: $app->add(new \Slim\Csrf\Guard);
    $app->add($app->getContainer()->get('csrf'));

    // $app->add(new \Slim\Middleware\Session([
    //             'name' => 'appbaseslim_session',
    //             'autorefresh' => true,
    //             'lifetime' => '1',
    //           ]));

    // Authorization
    // $session = $container['session'];
    // $app->add(new \App\controllers\Auth([
    //               'Token'        => $session['Token'],
    //               'username'     => 'root'
    //           ]));

};

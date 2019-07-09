<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // e.g: $app->add(new \Slim\Csrf\Guard);
    $app->add($app->getContainer()->get('csrf'));

    $app->add(new \Slim\Middleware\Session([
      'name' => 'dummy_session',
      'autorefresh' => true,
      'lifetime' => '1',
    ]));

};

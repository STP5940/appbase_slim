<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;



return function (App $app) {
    $container = $app->getContainer();

    $app->get('/users/[{name}]', \App\Controllers\HomeController::class . ':index');

    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

    //API Group
    // api/v1/user

    $app->group('/api', function() use($app){

      //Version API
      $app->group('/v1', function() use($app){


        $app->get('/user/[{id}]', function(Request $request, Response $response, array $args){
          // dd($request);
          $id = $args['id'];
          $sth = $this->db->prepare("SELECT * FROM USERS WHERE id=? ");
          $sth->bindParam(1, $id);
          $sth->execute();
          $user = $sth->fetchAll();

          // dd(count($user));
          if (count($user)) {
            return $this->response->withJson($user);
          }else {
            echo "<pre> [ {\"status\":400,\"message\":\"Bad request\"} ] </pre>";
          }

        });

        $app->get('/pdf/[{id}]', function(Request $request, Response $response, array $args){

          header('Content-Type: application/pdf');

          $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
          $fontDirs = $defaultConfig['fontDir'];

          $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
          $fontData = $defaultFontConfig['fontdata'];


          $Headmpdf = new \Mpdf\Mpdf([

              'fontDir' => array_merge($fontDirs, [
                  __DIR__ . '/custom/font',
              ]),
              'fontdata' => $fontData + [
                  'frutiger' => [
                      'R' => 'THSarabunNew.ttf',
                      // 'B' => 'THSarabunNew Bold.ttf',
                      // 'I' => 'THSarabunNew Italic.ttf',
                  ]
              ],
              'default_font' => 'frutiger',
              'default_font_size' =>  14

          ]);

          $Htmltxt = '<h1>Hello World</h1> <i>สวัสดีจ้า</i>';
          $Headmpdf->WriteHTML($Htmltxt);
          $Headmpdf->Output();
          exit();
        });


      });
    });

};

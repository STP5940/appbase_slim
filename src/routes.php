<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;



return function (App $app) {
    $container = $app->getContainer();

    // Group UsersController
    $app->group('/users', function() use($app, $container){

        $app->get('/[{id}]', \App\Controllers\UsersController::class . ':Index');

        $app->get('/csrf/crate', \App\Controllers\UsersController::class . ':csrf_crate');

        $app->post('/csrf/validate', \App\Controllers\UsersController::class . ':csrf_validate');

    });


    //API Group
    // api/v1/user

    $app->group('/api', function() use($app){

      //Version API
      $app->group('/v1', function() use($app){


        $app->get('/user/[{id}]', function(Request $request, Response $response, array $args){
          // dd($request);
          $id = $args['id'];
          $sth = $this->mysql->prepare("SELECT * FROM USERS WHERE id=? ");
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

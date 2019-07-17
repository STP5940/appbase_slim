<?php
namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Auth
{
     /**
      * Auth Users
      */

     /**
      * @var array
      */
     protected $settings;
     protected $statustoken = 0;

     /**
      * Constructor
      *
      * @param array $settings
      */
     public function __construct($settings = [])
     {
           $defaults = [
               'Token'        => null,
               'username'     => null,
           ];

           $this->settings = array_merge($defaults, $settings);
           $this->statustoken = isset($this->settings['Token']);
     }

     public function __invoke(Request $request, Response $response, callable $next)
     {

           if( $this->statustoken && $request->getUri()->getPath() ==  getroute['login']){
                return $response->withRedirect('/users/index');
           }
           if( $this->statustoken && $request->getUri()->getPath() == getroute['checklogin']){
                return $response->withRedirect('/users/index');
           }

           return $next($request, $response);
     }

     public function validateAuth()
     {

            if($this->statustoken){
                return true;
            }
            return false;
     }

}

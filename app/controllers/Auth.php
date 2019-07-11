<?php
namespace App\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Auth
{
     /**
      * Auth
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
                return $response->withRedirect('/api/users');
           }
           if( $this->statustoken && $request->getUri()->getPath() == getroute['checklogin']){
                return $response->withRedirect('/api/users');
           }

           // No Sesstion
           // if( !$this->statustoken && $request->getUri()->getPath() ==  getroute['logout']){
           //      return $response->withRedirect(getroute['login']);
           // }

           return $next($request, $response);
     }

     public function validateAuth()
     {
            // dd($response);
            if($this->statustoken){
              // dd($response->withRedirect(getroute['login']));

                // return $this->Redirect(getroute['login'], false);
                // return $response->withRedirect(getroute['login']);
                return true;
            }

            return false;
     }

     // public function Redirect($url, $permanent = false)
     // {
     //      header('Location: ' . $url, true, $permanent ? 301 : 302);
     //
     //      exit();
     // }

}

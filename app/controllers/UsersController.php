<?php
namespace App\controllers;

use App\Models\Users;
use Firebase\JWT\JWT;
use App\controllers\Controller;
use Illuminate\Database\Capsule\Manager as DB;

class UsersController extends Controller
{
    /**
     * Homepage
     */

    public function Index($request, $response, $args)
    {
      $session = $this->container['session'];
      $Token = isset($session['Token']);
      if($Token){
        return $response->withRedirect('/api/user');
        exit();
      }

      return view('Users.index');
      exit();
    }

    public function checklogin($request, $response, $args){
      $username = get($request, 'username');
      $password = get($request, 'password');
      $hash  = DB::SELECT("SELECT password FROM USERS WHERE username=? ", [$username])[0];

      if (validatehash($password, $hash->password)) {
          $settings = $this->container['settings']; // get settings array.
          $token = JWT::encode(['username' => $username, 'password' => $password], $settings['jwt']['secret'], "HS256");

          $session = $this->container['session'];
          $session['Token'] = $token;
          return $response->withRedirect('/api/user');
          exit();
      }

      return $response->withJson(['error' => true, 'message' => 'These password do not match our records.']);
      exit();
    }

}

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
      return view('Users.index');
      exit();
    }

    public function checklogin($request, $response, $args){
      $username = get($request, 'username');
      $password = get($request, 'password');
      $datause  = DB::SELECT("SELECT * FROM USERS WHERE username=? ", [$username]);

      if (count($datause) == 1 && validatehash($password, $datause[0]->password)) {
          $settings = $this->container['settings']; // get settings array.
          $token = JWT::encode(['username' => $username, 'password' => $password], $settings['jwt']['secret'], "HS256");

          $session = $this->container['session'];
          $session['Token']    = $token;
          $session['id']       = $datause[0]->id;
          $session['name']     = $datause[0]->name;
          $session['username'] = $datause[0]->username;
          $session['email']    = $datause[0]->email;
          $session['level']    = $datause[0]->level;
          return $response->withRedirect('/api/user');
          exit();
      }

      return $response->withJson(['error' => true, 'message' => 'These user or password do not match our records.']);
      exit();
    }

}

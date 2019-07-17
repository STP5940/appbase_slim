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

     public function index($request, $response, $args)
     {
       // Authorization
       if($this->container->Auth->validateAuth()) {
             $session = $this->container['session'];
             $Token = isset($session['Token']);
             if($Token){
                 // echo "UserName: ".$session['username'];
                 // dd($session->getIterator());
                 // header("Content-Type: application/json; charset=utf-8");
                 // echo " Login Ok";
                 $data = [
                   'name' => $session['name'],
                   'lastname' => $session['lastname'],
                   'username' => $session['username'],
                   'email' => $session['email']
                 ];

                 return view('Users.index', $data);
                 exit(); //enhance Slim performance
             }

       }

       return $response->withRedirect(getroute['login']);

     }

    public function login($request, $response, $args)
    {
      $session = $this->container['session'];
      $Token = isset($session['Token']);
      return view('Users.login');
      exit();
    }

    public function checklogin($request, $response, $args){
      $username = get($request, 'username');
      $password = get($request, 'password');
      $datause  = DB::SELECT("SELECT * FROM USERS WHERE username=? OR email=? ", [$username, $username]);

      if (count($datause) == 1 && validatehash($password, $datause[0]->password)) {
          $settings = $this->container['settings']; // get settings array.
          $token = JWT::encode(['username' => $username, 'password' => $password], $settings['jwt']['secret'], "HS256");
          // dd($this->container['session']);
          $session = $this->container['session'];
          $session['Token']    = $token;
          $session['id']       = $datause[0]->id;
          $session['name']     = $datause[0]->name;
          $session['lastname'] = $datause[0]->lastname;
          $session['username'] = $datause[0]->username;
          $session['email']    = $datause[0]->email;
          $session['level']    = $datause[0]->level;
          return $response->withRedirect('/users/index');
          exit();
      }

      return $response->withJson(['error' => true, 'message' => 'These user or password do not match our records.']);
      exit();
    }

}

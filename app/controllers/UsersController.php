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
                   'img' => $session['img'],
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

      $datause = Users::checklogin($username);

      if (!empty($datause) && $datause->active && validatehash($password, $datause->password)) {

          $settings = $this->container['settings']; // get settings array.
          $token = JWT::encode(['username' => $username, 'password' => $password], $settings['jwt']['secret'], "HS256");
          // dd($this->container['session']);
          $session = $this->container['session'];
          $session['Token']    = $token;
          $session['id']       = $datause->id;
          $session['name']     = $datause->name;
          $session['lastname'] = $datause->lastname;
          $session['username'] = $datause->username;
          $session['email']    = $datause->email;
          $session['img']      = $datause->img;
          $session['level']    = $datause->level;
          return $response->withRedirect('/users/index');
          exit();
      }

      // บัญชีถูกปิดการใช้งาน
      if(!empty($datause) == 1 && $datause->active == 0){
        return $response->withJson(['error' => true, 'message' => 'Account not Active']);
        exit();
      }

      return $response->withJson(['error' => true, 'message' => 'These user or password do not match our records.']);
      exit();
    }

}

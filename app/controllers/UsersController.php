<?php
namespace App\controllers;

use App\Models\Users;
use App\controllers\Controller;
use Illuminate\Database\Capsule\Manager as DB;

class UsersController extends Controller
{
    /**
     * Homepage
     */

    public function Index($request, $response, $args)
    {
      return $this->render($response, 'index.phtml', $args);
    }

    public function get_users($request, $response, $args)
    {
        $id   = $args['id'];
        $use   =  Users::find($id);
        $email =  $this->json($use['email']);

        $test = DB::table('Users')->where('id',$id)->get();
        echo "<pre>";
        print_r($test);
        echo "</pre>";

        $Counttest = $test->count();
        $password = ($Counttest > 0 ? $test[0]->password : null);
        echo $password;
        echo "<br><br>";

        $user  = DB::SELECT("SELECT * FROM USERS WHERE id=?", [$id]);
        $args = $this->json($args);

        $ArrayUse = ['data' => $args, 'db' => $user, 'email'=> $email];

        return $this->view("Index.index", [ 'User' => $ArrayUse]);
    }

    public function csrf_crate($request, $response, $args)
    {
      // CSRF token name and value
      $csrfName     = $request->getAttribute($this->csrfNameKey);
      $csrfValue    = $request->getAttribute($this->csrfValueKey);

      $data = [
                  'csrf'   => [
                      'keys' => [
                          'name'  => $this->csrfNameKey,
                          'value' => $this->csrfValueKey
                      ],
                      'name'  => $csrfName,
                      'value' => $csrfValue
                  ],
                  'Hello' => 'Hello Word'
              ];

      return $this->render($response, 'users/index.phtml', $data);

    }

    public function csrf_validate($request, $response, $args)
    {
      // Generate new tokens
      $csrfNameKey = $this->csrf->getTokenNameKey();
      $csrfValueKey = $this->csrf->getTokenValueKey();
      $keyPair = $this->csrf->generateToken();

      // Validate retrieved tokens
      $this->csrf->validateToken($csrfNameKey, $csrfValueKey);
      echo "<br>Appbase Slim csrf token Ok";
      dd($request->getParsedBody()['name']);

    }

}

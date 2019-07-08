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

        $sth  = $this->db->prepare("SELECT * FROM USERS WHERE id=? ");
        $sth->bindParam(1, $id);
        $sth->execute();
        $user = $sth->fetchAll();
        $args = $this->json($args);

        $ArrayUse = ['data' => $args, 'db' => $user, 'email'=> $email];

        return $this->view("Index.index", [ 'User' => $ArrayUse]);
    }

    public function csrf_crate($request, $response, $args)
    {
      // CSRF token name and value
      $csrfNameKey  = $this->csrf->getTokenNameKey();
      $csrfValueKey = $this->csrf->getTokenValueKey();
      $csrfName     = $request->getAttribute($csrfNameKey);
      $csrfValue    = $request->getAttribute($csrfValueKey);

      return $this->render($response, 'index.phtml', [
                  'csrf'   => [
                      'keys' => [
                          'name'  => $csrfNameKey,
                          'value' => $csrfValueKey
                      ],
                      'name'  => $csrfName,
                      'value' => $csrfValue
                  ]
              ]);

    }

    public function csrf_validate($request, $response, $args)
    {
      // Generate new tokens
      $csrfNameKey = $this->csrf->getTokenNameKey();
      $csrfValueKey = $this->csrf->getTokenValueKey();
      $keyPair = $this->csrf->generateToken();

      // Validate retrieved tokens
      $this->csrf->validateToken($_POST[$csrfNameKey], $_POST[$csrfValueKey]);
      echo "<br>Appbase Slim csrf token Ok";
      die();

    }

}

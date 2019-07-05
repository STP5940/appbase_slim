<?php
namespace App\controllers;

use App\Models\Users;
use App\controllers\Controller;
use Illuminate\Database\Capsule\Manager as DB;

class HomeController extends Controller
{
    /**
     * Homepage
     */

    public function index($request, $response, $args)
    {
        $id   = $args['id'];

        $use   =  Users::find($id);
        $email =  $this->json($use->email);

        $test = DB::table('Users')->where('id',$id)->get();
        echo "<pre>";
        print_r($test);
        echo "</pre>";
        echo $test[0]->password;
        echo "<br><br>";

        $sth  = $this->db->prepare("SELECT * FROM USERS WHERE id=? ");
        $sth->bindParam(1, $id);
        $sth->execute();
        $user = $sth->fetchAll();
        $args = $this->json($args);

        $name = $request->getAttribute('csrf_name');
        $value = $request->getAttribute('csrf_value');

        $ArrayUse = ['data' => $args, 'db' => $user, 'email'=> $email, 'name' => $name, 'value' => $value];

        return $this->view("Index.index", [ 'User' => $ArrayUse]);
    }

}

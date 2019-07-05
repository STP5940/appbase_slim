<?php
namespace App\controllers;

use App\Models\Sample;
use App\Models\Users;

class HomeController extends Controller {
    /**
     * Homepage
     */

    public function index($request, $response, $args)
    {

        $use   =  Users::find($args['id']);
        $email =  $this->json($use->email);

        $id   = $args['id'];
        $sth  = $this->db->prepare("SELECT * FROM USERS WHERE id=? ");
        $sth->bindParam(1, $id);
        $sth->execute();
        $user = $sth->fetchAll();
        $args = $this->json($args);

        $ArrayUse = ['data' => $args, 'db' => $user, 'email'=> $email];

        return $this->view("Index.index", [ 'User' => $ArrayUse]);
    }

}

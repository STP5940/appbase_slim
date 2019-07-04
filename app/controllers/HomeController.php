<?php
namespace App\controllers;

class HomeController extends Controller {
    /**
     * Homepage
     */

    public function index($request, $response, $args)
    {
      // dd($this->connect);

        $id = "4";
        $sth = $this->db->prepare("SELECT * FROM USERS WHERE id=? ");
        $sth->bindParam(1, $id);
        $sth->execute();
        $user = $sth->fetchAll();
        // $user = $this->json($user);

        $args = $this->json($args);
        return $this->view("Index.index", ['data' => $args, 'db' => $user]);
    }

}

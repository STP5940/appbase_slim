<?php
namespace App\controllers;


class HomeController extends Controller {
    /**
     * Homepage
     */

    public function index($request, $response, $args)
    {
        $args = $this->json($args);
        return $this->view("Index.index", ['data' => $args]);
    }

}

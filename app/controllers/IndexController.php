<?php
namespace App\controllers;

use App\Models\Users;
use App\controllers\Controller;
use Illuminate\Database\Capsule\Manager as DB;

class IndexController extends Controller
{
    /**
     * Homepage
     */

    public function Index($request, $response, $args)
    {
      return view('index');
    }

}

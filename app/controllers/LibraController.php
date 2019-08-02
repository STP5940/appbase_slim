<?php
namespace App\controllers;

use App\controllers\Controller;
use Illuminate\Database\Capsule\Manager as DB;
use PhpLibra\LibraClient;

class LibraController extends Controller
{
    /**
     * Homepage
     */

    public function Index($request, $response, $args)
    {
      $client = new LibraClient();
      // echo $client->getLatestVersionNumber() . PHP_EOL;
      echo "string";
      exit();
      // return view('index');
    }

}

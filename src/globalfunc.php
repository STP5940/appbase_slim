<?php

use eftec\bladeone\BladeOne;

define('views', __DIR__ . '/../resources/views');
define('cache', __DIR__ . '/../resources/cache');

/*
|--------------------------------------------------------------------------
| Link to CSS or Javascript or image
|--------------------------------------------------------------------------
*/
if (!function_exists('asset')) {
    function asset($File)
    {
        return '/'.$File.'?v='.date("YmdHis");
    }
}

/*
|--------------------------------------------------------------------------
| repage to view
|--------------------------------------------------------------------------
*/
if (!function_exists('view')) {
    function view($Bladefile, $ArrayValue = array()){
      $blade = new BladeOne(views,cache,BladeOne::MODE_AUTO);
      echo @$blade->run($Bladefile,$ArrayValue); // /views/hello.blade.php must exist
    }
}

/*
|--------------------------------------------------------------------------
| repage function get();
|--------------------------------------------------------------------------
*/
if (!function_exists('get')) {
    function get($request, $parameter){
      return $request->getParsedBody()[$parameter];
    }
}

/*
|--------------------------------------------------------------------------
| hash string
|--------------------------------------------------------------------------
*/
if (!function_exists('hashstring')) {
    function hashstring($String)
    {
      $Secukey = 'A++$#%fsad$6546V&^%&^dfg*&(*gffdg646)*(*&^Ddfgfd%$^#^4654%fdgDfdHfdgg$&%^^&&*sdfSKsd*())';
      $options = [
          'cost' => 13,
          'Salt' => $Secukey,
      ];

      return password_hash($String, PASSWORD_BCRYPT, $options);
    }
}

/*
|--------------------------------------------------------------------------
| validatehash hash
|--------------------------------------------------------------------------
*/
if (!function_exists('validatehash')) {
    function validatehash($string, $hash)
    {
      return password_verify($string."", $hash);
    }
}

/*
|--------------------------------------------------------------------------
| set list route to array
|--------------------------------------------------------------------------
*/
if (!function_exists('setroute')) {
    function setroute($routes, $nameget)
    {
      foreach ($routes as $route) {
        $getroute[$route->getName()] = $route->getPattern();
      }
      define($nameget, $getroute);
    }
}

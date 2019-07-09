<?php
namespace App\controllers;

/**
 * Basic controller
 */
use eftec\bladeone\BladeOne;
use Interop\Container\ContainerInterface;

define('views', __DIR__ . '/../../resources/views');
define('cache', __DIR__ . '/../../resources/cache');

class Controller
{

    public $csrf;
    public $container;
    public $csrfNameKey;
    public $csrfValueKey;

    public function __construct(ContainerInterface $container)
    {
         $this->csrf = $container['csrf'];
         $this->csrf->validateStorage();
         $this->container = $container;

         $this->csrfNameKey  = $this->csrf->getTokenNameKey();
         $this->csrfValueKey = $this->csrf->getTokenValueKey();
    }

    public function render($response, $PageName, $ArrayValue = [])
    {
      return $this->container->get('renderer')->render($response, $PageName, $ArrayValue);
    }

    /*
    |--------------------------------------------------------------------------
    | repage to view
    |--------------------------------------------------------------------------
    */
    protected function view($Bladefile, $ArrayValue = array()){
      $blade = new BladeOne(views,cache,BladeOne::MODE_AUTO);
      echo @$blade->run($Bladefile,$ArrayValue); // /views/hello.blade.php must exist
    }

    protected function json($json=array(), $return=true, $exit=1) {
        if (!$return && !headers_sent()) {
            header("Content-Type: application/json; charset=utf-8");
            echo json_encode($json);
            $exit && exit(); //enhance Slim performance
        } else {
            return json_encode($json);
        }
    }


}

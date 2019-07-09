<?php
namespace App\controllers;

/**
 * Basic controller
 */

use Interop\Container\ContainerInterface;

class Controller
{

    public $csrf;
    public $container;
    public $csrf_nameKey;
    public $csrf_valueKey;
    public $csrf_name;
    public $csrf_value;

    public function __construct(ContainerInterface $container)
    {
         $this->csrf = $container['csrf'];
         $this->csrf->validateStorage();
         $this->container = $container;

         $this->csrf_nameKey  = $this->csrf->getTokenNameKey();
         $this->csrf_valueKey = $this->csrf->getTokenValueKey();
         $this->csrf_name = $this->csrf->getTokenName();
         $this->csrf_value = $this->csrf->getTokenvalue();

         define('csrf', "<input type='hidden' name='$this->csrf_nameKey' value='$this->csrf_name'>
         <input type='hidden' name='$this->csrf_valueKey' value='$this->csrf_value'>");
    }

    public function render($response, $PageName, $ArrayValue = [])
    {
      return $this->container->get('renderer')->render($response, $PageName, $ArrayValue);
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

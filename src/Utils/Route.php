<?php
namespace Imfree\Free\Utils;

class Route{

 public static $routes = [];

 public static function redirect(string $path, callable $callback){
    $currenturi = $_SERVER['REQUEST_URI'];
    self::$routes[$path] = $callback;

    foreach(self::$routes as $dir => $callback){
       if( $dir !== $currenturi){
          continue;
       }else{
          array_shift(self::$routes);
          $callback();
          array_shift(self::$routes);
      }
   }
 }

}

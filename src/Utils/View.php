<?php
 namespace Imfree\Free\Utils;


class View{

    const pathToElements = 'resources/pages/elements/';

    
	public static function getContentView(string $view) :string{
	   $file = __DIR__ . "/../../resources/pages/{$view}.html";
	   return file_exists($file) ? file_get_contents($file) : '';
    }

    public static function getPathToElements(){
         return self::pathToElements;
    }

	public static function getNameElements() :array{
	   $elements = scandir(self::getPathToElements());
	   $elements = array_slice($elements,2);

	   return $elements;
	}

	public static function getElements() :array{
	  $files = [];
	  $elements = self::getNameElements();
	  rsort($elements);

	  foreach($elements as $key => $element){
	    $files[$key] = file_get_contents(self::getPathToElements() . $element);
	  }

	  return $files;
	}

    public static function render(string $view, array $vars){
      $contentView = self::getContentView($view);
      $keys = array_keys($vars);
	  $keys = array_map(function($item){
		return '{{'.$item.'}}';
	 },$keys);

	  return str_replace($keys, array_values($vars), $contentView);
    }
    

}

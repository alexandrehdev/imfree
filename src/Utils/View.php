<?php
    namespace Imfree\Free\Utils;
    use FilesystemIterator;

    class View{
    
    public static $contentView;

    /**
     * get all the content of the view
     *
     * @param [type] $view
     * @return void
     */

    private static function getContentView(string $view) :string{

        $file = __DIR__ . "/../../resources/pages/". $view . ".html" ;
    
        return file_exists($file) ? file_get_contents($file) : '';

    }



    public static function getElements(){
        $files = [];

        $pathToElements = 'resources/pages/elements/';
        $elements = scandir($pathToElements);
        $elements = array_slice($elements, 2);
        
        foreach($elements as $key  => $element){
            $files[$key] = file_get_contents($pathToElements . $element);
        }
        
        return $files;
    }



    
    /**
     * It will render all view files
     *
     * @param string $view
     * @param array $vars
     * @return string
     */

    public static function render(string $view,array $vars) :mixed{
        $contentView = self::getContentView($view);
        $keys        = array_keys($vars);
        
        $keys        = array_map(function($item){
            return '{{'. $item . '}}';
        },$keys);
        
    
        return str_replace($keys, array_values($vars), $contentView);
    }

    }
?>
<?php
    namespace Imfree\Free\Controller\Pages;
    use Imfree\Free\Utils\View;

    class Home{

        public static function getHome() {

          $elements = View::getElements();
          
          return View::render("index", [
            'header'  => $elements[2],
            'content' => 'content',
            'footer'  => 'footer'
          ]);
        }  
        
        
    }

?>
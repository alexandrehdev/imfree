<?php
    namespace Imfree\Free\Controller\Pages;
    use Imfree\Free\Controller\Pages\FreeGames;
    use Imfree\Free\Utils\View;

    class Home{

    public static function nameElements() :array{
		$elements = View::getNameElements();
		$elements = array_map(function($item){
        return basename($item,'.html');
		},$elements);

		rsort($elements);

		return $elements;
    }

    public static function getHome() {
        $nameElement = self::nameElements();
        $content = View::getElements();
        self::settingCard();
        /* $games = new FreeGames; */
        /* var_dump($games->contentGames()); */
        /* trazer a pagina já renderizando o conteudo da api */
        return View::render("index", [
            $nameElement[0] => $content[0],
            $nameElement[1] => $content[1],
            $nameElement[2] => $content[2]
          ]);
    }

    public static function settingCard(){
        $content = View::getPathToElements().'content.html';
        $card = View::getCard("card");
        $fileSize = filesize($content);
        $totalSize = $fileSize * 10;
        die();
        if($fileSize == $totalSize){
            /* "don't do anything" */
        }else{
            for($x = 0; $x <= 10; $x++){
                file_put_contents($content,$card, FILE_APPEND);
                continue;
            } 
        }
        
    }

  }

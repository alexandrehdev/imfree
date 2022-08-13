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
        self::buildCard();

        return View::render("index", [
            $nameElement[0] => $content[0],
            $nameElement[1] => $content[1],
            $nameElement[2] => $content[2]
        ]);

    }

    public static function buildCard(){
        $content = View::getPathToElements();

        $contentCards = [];
        $freegames = new FreeGames;
        $games = $freegames->contentGames();

        for($x = 0; $x <= 30; $x++){

            $contentCards[$x] = " <div class='main-card'>
                                      <div class='card-image'>
                                        <img src=". $games[$x]['thumbnail'] .">
                                      </div>
                                      <div class='card-title'>".$games[$x]['title']."</div>
                                      <div class='card-description'>".$games[$x]['short_description']."</div>
                                   </div>
                                ";

            file_put_contents($content . "content.html",$contentCards);
        }
    }


  }

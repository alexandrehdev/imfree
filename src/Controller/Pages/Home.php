<?php
    namespace Imfree\Free\Controller\Pages;
    use Saphira\Connectdb\Actions\DataActions;
    use Saphira\Connectdb\Common\Enviroment;
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

    public static function getUnloggedHome() {
        $nameElement = self::nameElements();
        $content = View::getElements();
        self::buildCard();
        return View::render("index", [
            $nameElement[0] => $content[0],
            $nameElement[3] => $content[3],
            $nameElement[2] => $content[2]
        ]);

    }

    public static function getLoggedHome(){
        $nameElement = self::nameElements();
        $content = View::getElements();
        self::buildCard();
        return View::render("index", [
            $nameElement[0] => $content[1],
            $nameElement[3] => $content[4],
            $nameElement[2] => $content[2]
        ]);                  
    }

    public static function buildCard(){
        Enviroment::load(__DIR__);
        $games = DataActions::selectAll("Games");
        $content = View::getPathToElements();
        $contentCards = [];

        for($x = 0; $x <= 27; $x++){
            $contentCards[$x] = 
               "<div class='main-card'>
                   <div class='release-date'>".$games[$x]["release_date"]."</div>
                   <div class='card-image'>
                       <img src=". $games[$x]['image_url'] .">
                    </div>
                    <div class='card-content'>
                        <div class='card-title'>".$games[$x]['title']."</div>
                        <div class='card-description'>".$games[$x]['short_description']."</div>
                        <div class='card-btns'>
                            <a class='card-btn-more' href='/'>See More</a>
                            <button class='card-btn-like' type='submit'>
                                <img src='resources/pages/icons/like.svg' alt='like'>
                            </button>
                        </div>
                    </div>
                </div>
               ";
            /* file_put_contents($content . "content.html",$contentCards); */
        }
    }


  }

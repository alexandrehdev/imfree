<?php
namespace Imfree\Free\Controller\Pages;

class FreeGames{
    private $api; 

    function __construct()
    {
        $this->setApi(file_get_contents("https://www.freetogame.com/api/games"));
    }

    public function getApi(){
        return $this->api;
    }

    public function setApi($api){
      $this->api = $api;
    }

    public function contentGames(){
        $games = $this->getApi();
        return json_decode($games, true);
    }
}

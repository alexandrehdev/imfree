<?php
namespace Imfree\Games\View;

class Components{

    private string $url;

    private array $components;

    private string $page;

    private array $componentContents = [];


    function __construct()
    {
        $this->page = "pages/";
        $this->url = "components/";
    }


    public function generate() 
    {
        $this->components = array_splice(scandir($this->url), -2);
        $this->components = array_combine(["footer", "head"], $this->components);


        foreach ($this->components as $component) {
            if(file_exists($this->url . $component)) {
                array_push($this->componentContents,file_get_contents($this->url . $component));
            }
        }

        $this->componentContents = array_combine(["@footer","@header"], $this->componentContents);

        $content = file_get_contents("pages/principal.php");

        foreach($this->componentContents as $component){
            echo str_replace(["@footer","@header"],$component,$content);
        }


    }


}
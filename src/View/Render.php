<?php

namespace Imfree\Games\View;


class Render{


    private string $page;


    private string $pageContents;

    
    function __construct()
    {
        $this->page = "pages/";
    }


    public function get(string $pageName, mixed $data = null) :void
    {
        $pageName = $pageName.".php";
        
        if(file_exists($this->page . $pageName)){
            $this->pageContents = file_get_contents($this->page . $pageName);
            
            // echo $this->pageContents;
        }

    }
}
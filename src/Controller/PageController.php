<?php

namespace Imfree\Games\Controller;

use Imfree\Games\View\Components;
use Imfree\Games\View\Render;

class PageController
{

    public Render $render;


    function __construct()
    {
        $this->render = new Render;    
    }


    public function index()
    {

        (new Components())->generate();

        


    }
}
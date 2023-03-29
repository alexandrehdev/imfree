<?php

use Imfree\Games\Controller\PageController;

// $json_content = file_get_contents("https://www.freetogame.com/api/games");
// $result = json_decode($json_content, true);

require_once("./vendor/autoload.php");

$page = new PageController;
$page->index();
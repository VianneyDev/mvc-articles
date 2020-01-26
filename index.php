<?php

require 'app/App.php';
use App\App;
use App\Controller\ArticleController;

define ('ROOT', __DIR__);
App::load();

if (isset($_GET["page"]) && $_GET["page"] == 'home' || !isset($_GET["page"])) {
    $result = new ArticleController();
    $result->home();
} elseif (isset($_GET["page"]) && $_GET["page"] == 'single') {
    $result = new ArticleController();
    // $result->single($_GET["id"]);
} 
// else {
    // $result = new ArticleController();
    // $result->404();
// }

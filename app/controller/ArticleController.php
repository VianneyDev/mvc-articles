<?php

namespace App\Controller;

class ArticleController extends AppController{


    public function __construct(){
        $this->loadModel('Article');
    }

    public function home(){
        $articles = $this->modelName->getArticles();
        return $this->render('global.home', [
            "articles" => $articles,
        ]);
    }

    public function articlePage() {
        $articles = $this->modelName->pageArticle();
        return $this->render('global.article', [
            'articles' => $articles,
        ]);

    }

}
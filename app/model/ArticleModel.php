<?php


namespace App\Model;
use  Core\Model\Model;

class ArticleModel extends Model{
    
    public function getArticles() {
        return $this->db->query('
                    SELECT `article_id`, `title`, `text`, `date`, `categorie_id`, `url`
                    FROM `articles`
                    ORDER BY `date` DESC
        ');
    }

    public function pageArticle() {
        return $this->db->query('
                    SELECT `article_id`, `title`, `text`, `date`, `categorie_id`
                    FROM `articles`
                    WHERE `url` = ?
        ', array($url));
    }

    public function newArticle(){
        return $this->db->save('INSERT INTO articles SET title = ?, text= ?, date= ?, categorie_id = ?', ["Article depuis ArticleModel", "nouvel article", "2020/01/21", 4]);
    }
}
<?php

namespace src\Controllers;
use src\View\View;
// use src\Services\Db;
use src\Models\Articles\Article;

// Task 3.1
use src\Models\Users\User; //Add User Name

class ArticleController {
    private $view;
    // private $db;
    public function __construct()
    {
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
        // $this->db = new Db();
    }


    public function index(){
        $articles = Article::findAll();
        $this->view->renderHtml('main/main', ['articles'=>$articles]);
    }

    public function show(int $id){
        
        $article = Article::getById($id);
        if ($article == null){
            $this->view->renderHtml('main/error', [], 404);
            return;
        }

        // Task 3.1
        // We get the author of the article
        $author = $article->getAuthorId(); 

        // Task 3.1 
        // Pass the author to the template 'author' => $author
        $this->view->renderHtml('article/show', ['article'=>$article, 'author' => $author]); 
    }




    

    // public function index(){
    //     $sql = 'SELECT * FROM `articles`';
    //     $article = $this->db->query($sql, [':id'=>$id], Article::class);
    //     // var_dump($articles);
    //     $this->view->renderHtml('main/main', ['articles'=>$articles]);
    // }


    // public function show(int $id){
    //     $sql = "SELECT * FROM `articles` WHERE `id`=:id";
    //     $article = $this->db->query($sql, [':id'=>$id]);

    //     if ($article == null){
    //         $this->view->renderHtml('main/error', [], 404);
    //         return;
    //     }
    //     $this->view->renderHtml('article/show', ['article'=>$article[0]]);
    // }
}
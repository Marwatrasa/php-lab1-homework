<?php

    // http://localhost/PHP_labs/php_laba_1/Project/www/index.php


namespace src\Controllers;
use src\View\View;
use src\Services\Db;

class MainController{
    private $view;
    private $db;

    public function __construct()
    {
        $this->view = new View(dirname(dirname(__DIR__)).'/templates');
        $this->db = new Db();
    }
    
    public function sayHello(string $name){
 // // (Task 2.2) add 'title' => 'Welcome Page' // pass an associative array that contains title
// $this->view->renderHtml('main/hello.php', ['name'=>$name, 'title' => 'Welcome Page']); // The renderHtml() method is responsible for compiling the template with the passed data and outputting the resulting HTML to the browser.
        $this->view->renderHtml('main/hello', ['name'=>$name, 'title' => 'Welcome Page']);
    }


    // задание 2.1 
    public function sayBye(string $name){
        
        $data = ['name' => $name, 'title' => 'Bye']; 
       
        $this->view->renderHtml('main/bye.php', $data); 
    }

    
    // public function main(){
    //     $sql = 'SELECT * FROM `articles`';
    //     $articles = $this->db->query($sql);
    //     // var_dump($articles);
    //     $this->view->renderHtml('main/main', ['articles'=>$articles]);
    // }
}
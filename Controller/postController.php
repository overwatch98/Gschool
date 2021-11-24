<?php 

use Gschool\Model\PostManager;
use Gschool\Model\CommentManager;

function listPost(){
    $postManager = new PostManager();
    $posts = $postManager->getAll();

    require 'View/frontend/homeView.php';
}

function listPostAdmin(){
    $postManager = new PostManager();
    $posts = $postManager->getAll();

    require 'View/backend/home.php';
}

function post(){
    $url = $_GET['url'];
    $url = explode('-', $url);
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    $post = $postManager->getPost($url[1]);
    $comments = $commentManager->getComments($url[1]);
    require 'View/frontend/postView.php';
}
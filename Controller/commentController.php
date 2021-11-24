<?php

use Gschool\Model\CommentManager;

function postComment($postId, $userId, $comment){
    $commentManager = new CommentManager();
    $success = $commentManager->addcomment($postId, $userId, $comment);
    if($success === false){
        throw new Exception("Impossible d'ajouter le commentaire !");
    }else{
        //$_SESSION['flash']['success'] = 'Féllicitation ' . $_SESSION['auth']->username . ' votre commentaire a été bien ajouter !';
        redirect("post-" . $postId);
    }
}

function getComment($postId){
    
}
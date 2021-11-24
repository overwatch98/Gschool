<?php 
namespace Gschool\Model;

class CommentManager extends Manager{

    public function addcomment($post_id, $user_id, $comment){
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO comments SET post_id = ?, user_id = ?, comment = ?, comment_date = NOW()");
        $comments = $req->execute([$post_id, $user_id, $comment]);
        return $comments;
    }

    public function getComments($postId){
        $db = $this->dbConnect();
        $comments = $db->prepare("SELECT comments.id, comments.post_id, comments.user_id, comments.comment, users.id, users.username FROM comments LEFT JOIN users ON comments.user_id = users.id WHERE post_id = ? ORDER BY comment_date DESC");
        $comments->execute([$postId]);
        return $comments;
    }

}